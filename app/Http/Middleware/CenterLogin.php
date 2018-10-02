<?php

namespace App\Http\Middleware;

use App\Models\Center;
use Closure;
use Illuminate\Support\Facades\Cookie;

class CenterLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Cookie::has("CENTER_SESSION")) {
            $center = Center::where("session", Cookie::get("CENTER_SESSION"))->first();

            if ($center) {
                session()->put('CENTER_ID' , $center->id);
                session()->put('CENTER_NAME' , $center->name);
                session()->put('CENTER_T_NUMBER' , $center->t_number);
                session()->put('CENTER_PHONE' , $center->phone);
                session()->put('CENTER_SESSION' , $center->session);
                session()->save();

                return $next($request);
            }
        }

        return redirect("/control-panel/center/login");

    }
}
