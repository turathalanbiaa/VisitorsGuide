<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function register() {
        return view("user.register");
    }

    public function registerValidation(Request $request) {
        $rules = [
            "name" => "required|min:8",
            "username" => "required|unique:user,username",
            'password' => "required|min:8|confirmed",
        ];

        $rulesMessage = [
            "name.required" => "يرجى ادخال الاسم الحقيقي.",
            "name.min" => "يجب ان يكون اسم المستخدم لايقل عن 8 حرف.",
            "username.required" => "يرجى ادخال اسم المستخدم.",
            "username.unique" => "يوجد مستخدم أخر بنفس الاسم، يرجى استخدام اسم مستخدم مختلف.",
            "password.required" => "يرجى ادخال كلمة المرور.",
            "password.min" => "يجب ان تكون كلمة المرور لاتقل عن 8 حروف.",
            'password.confirmed' => 'كلمتا المرور غير متطابقتين.'
        ];

        $this->validate($request, $rules, $rulesMessage);

        $user = new User();
        $user->name = Input::get("name");
        $user->username = Input::get("username");
        $user->password = Input::get("password");
        $user->date = date("Y-m-d");
        $user->session = md5(uniqid());
        $success = $user->save();

        if (!$success)
            return redirect("/register")->with('ErrorRegisterMessage', "فشل انشاء الحساب !!! أعد المحاولة مرة أخرى.");

        session()->put("USER_ID", $user->id);
        session()->put("USER_NAME", $user->name);
        session()->put("USER_USERNAME", $user->username);
        session()->put("USER_PASSWORD", $user->password);
        session()->put("USER_SESSION", $user->session);
        session()->save();

        return redirect("/")->withCookie(cookie('USER_SESSION' , $user->session , 1000000000));
    }

    public function login() {
        return view("user.login");
    }

    public function loginValidation(Request $request) {
        $rules = [
            "username" => "required",
            "password" => "required"
        ];

        $rulesMessage = [
            "username.required" => "يرجى ادخال اسم المستخدم.",
            "password.required" => "يرجى ادخال كلمة المرور."
        ];

        $this->validate($request, $rules, $rulesMessage);


        $username = Input::get("username");
        $password = Input::get("password");

        $user = User::where("username","=",$username)->where("password","=",$password)->first();

        if (!$user)
            return redirect("/login")->with('ErrorLoginMessage', "فشل تسجيل الدخول !!! أعد المحاولة مرة أخرى.");

        $user->session = md5(uniqid());
        $user->save();

        session()->put("USER_ID", $user->id);
        session()->put("USER_NAME", $user->name);
        session()->put("USER_USERNAME", $user->username);
        session()->put("USER_PASSWORD", $user->password);
        session()->put("USER_SESSION", $user->session);
        session()->save();

        return redirect("/")->withCookie(cookie('USER_SESSION' , $user->session , 1000000000));
    }

    public function logout() {
        $user = User::where("session", "=", Cookie::get("USER_SESSION"))->first();

        if (!$user)
            return redirect("/login");

        $user->session = null;
        $user->save();

        session()->remove("USER_ID");
        session()->remove("USER_NAME");
        session()->remove("USER_USERNAME");
        session()->remove("USER_PASSWORD");
        session()->remove("USER_SESSION");
        session()->save();

        $cookie = Cookie::forget("USER_SESSION");

        return redirect("/")->withCookie($cookie);
    }
}
