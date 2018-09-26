<?php

namespace App\Http\Controllers;

use App\Enums\MajlesStatus;
use App\Models\Center;
use App\Models\Lost;
use App\Models\Majales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;

class ControlPanelController extends Controller
{
    //Management Majales
    public function managementMajales() {
        $majales = Majales::where("status", MajlesStatus::NO_ACTIVE)
            ->orderBy("id", "AES")
            ->get();

        return view("CP.majales")->with([
            "majales" => $majales
        ]);
    }

    public function acceptMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);
        if ($majles) {
            $majles->status = MajlesStatus::ACCEPT;
            $success = $majles->save();

            if ($success)
                return ["success" => true];
            else
                return ["success" => false];
        }

        return ["majles" => "notFound"];
    }

    public function rejectMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);

        if ($majles) {
            $majles->status = MajlesStatus::REJECT;
            $success = $majles->save();
            if ($success)
                return ["success" => true];
            else
                return ["success" => false];
        }

        return ["majles" => "notFound"];
    }

    public function deleteMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);

        if ($majles) {
            $success = $majles->delete();
            if ($success)
                return ["success" => true];
            else
                return ["success" => false];
        }

        return ["majles" => "notFound"];
    }

    //Management Centers
    public function centerLogin() {
        if (Cookie::has("CENTER_SESSION")) {
            $center = Center::where("session", "=", Cookie::get("CENTER_SESSION"))->first();

            if (!$center)
                return view("CP.centers.login");

            session()->put('CENTER_ID' , $center->id);
            session()->put('CENTER_NAME' , $center->name);
            session()->put('CENTER_T_NUMBER' , $center->t_number);
            session()->put('CENTER_PHONE' , $center->phone);
            session()->put('CENTER_SESSION' , $center->session);
            session()->save();

            return redirect("/control-panel/center");
        }

        return view("CP.centers.login");
    }

    public function centerLoginValidation(Request $request)
    {
        $rules = [
            "username" => "required",
            "password" => "required"
        ];

        $rulesMessage = [
            "username.required" => "يرجى ادخال اسم المركز.",
            "password.required" => "يرجى ادخال كلمة المرور."
        ];

        $this->validate($request, $rules, $rulesMessage);


        $username = Input::get("username");
        $password = Input::get("password");

        $center = Center::where("username","=",$username)->where("password","=",$password)->first();

        if (!$center)
            return redirect("/control-panel/center/login")->with('ErrorRegisterMessage', "فشل تسجيل الدخول !!! أعد المحاولة مرة أخرى.");

        $center->session = md5(uniqid());
        $center->save();

        session()->put('CENTER_ID' , $center->id);
        session()->put('CENTER_NAME' , $center->name);
        session()->put('CENTER_T_NUMBER' , $center->t_number);
        session()->put('CENTER_PHONE' , $center->phone);
        session()->put('CENTER_SESSION' , $center->session);
        session()->save();

        return redirect("/control-panel/center")->withCookie(cookie('CENTER_SESSION' , $center->session , 1000000000));
    }

    public function centerLogout(Request $request) {
        $center = Center::where("session", "=", Cookie::get("CENTER_SESSION"))->first();

        if (!$center)
            return redirect("/control-panel/center/login");

        $center->session = null;
        $center->save();

        session()->remove("CENTER_ID");
        session()->remove("CENTER_NAME");
        session()->remove("CENTER_T_NUMBER");
        session()->remove("CENTER_PHONE");
        session()->remove("CENTER_SESSION");
        session()->save();

        $cookie = Cookie::forget("CENTER_SESSION");

        return redirect("/control-panel/center/login")->withCookie($cookie);
    }

    public function managementCenter() {
        return view("CP.centers.main");
    }

    public function addLost() {
        return view("CP.centers.add-lost");
    }

    public function addLostValidation(Request $request) {
        dd(Input::all());

        $rules = [
            "category" => "required|between:1,6",
//            "des_ar" => "required",
            "file" => "file|image|min:50|max:200",
        ];

        $rulesMessage = [
//            "category.required" => "يجب اختيار الصنف",
//            "category.required" => "لم تقم بأختيار صنف السؤال.",
//            "tags.required" => "لم تقم بأختيار الموضوع التابع له السؤال.",
//            "image.file" => "انت تحاول رفع ملف ليس بصورة.",
//            "image.image" => "انت تحاول رفع ملف ليس بصورة.",
//            "image.min" => "انت تقوم برفع صورة صغيرة جداً.",
//            "image.max" => "حجم الصورة يجب ان لايتعدى 200KB."
        ];

        $this->validate($request, $rules, $rulesMessage);

        dd(Input::all());
    }








    public function createAutoCenters() {

        for ($i=1; $i<=40;$i++)
        {
            //Generate Auto Password
            $password = $i.time()."2018";
            $password = md5(uniqid($password));
            $password = "center_".substr($password,10,10);

            $center = new Center();

            $center->name = "مركز ارشاد التائهين رقم-" . $i;
            $center->username = "center-".$i;
            $center->password = $password;
            $center->t_number = 0;
            $center->session = null;
            $center->date = Date("Y-m-d");
            $center->phone = 0;

            $center->save();
        }
    }
}
