<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Cookie;

class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Cookie::has("USER_SESSION")) {
            $user = User::where("session", Cookie::get("USER_SESSION"))->first();

            if (!$user)
                return redirect("/login");

            session()->put("USER_ID", $user->id);
            session()->put("USER_NAME", $user->name);
            session()->put("USER_USERNAME", $user->username);
            session()->put("USER_PASSWORD", $user->password);
            session()->put("USER_SESSION", $user->session);
            session()->save();

            return $next($request);
        }

        return redirect("/register");
    }
}
