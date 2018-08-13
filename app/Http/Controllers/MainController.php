<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;

class MainController extends Controller
{
    public function index() {
        return view("main");
    }

    public function selectLanguage() {
        $language = Input::get("language");
        Cookie::queue('language', $language, 1000000);

        return redirect("/");
    }
}
