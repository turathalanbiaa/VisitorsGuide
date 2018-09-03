<?php

namespace App\Http\Controllers;

use App\Enums\AdeuaZuaratCategory;
use App\Models\AdeuaAndZuarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdeuaAndZuaratController extends Controller
{
    public function home ()
    {
        return view('adeuaAndZuarat/home');
    }
    public function adeua ()
    {
        $daysDescending = DB::table('adeua_zuarat')
            ->where('category', AdeuaZuaratCategory::DAYS_ADEUA)
            ->where('day', '<', date('w'))
            ->orderBy('day')->get()->toArray();

        $daysAscending = DB::table('adeua_zuarat')
            ->where('category', AdeuaZuaratCategory::DAYS_ADEUA)
            ->where('day', '>=', date('w'))
            ->orderBy('day')->get()->toArray();

        $daysAdeua = array_merge($daysAscending, $daysDescending);

        $publicAdeua = AdeuaAndZuarat::where('category', AdeuaZuaratCategory::PUBLIC_ADEUA)->paginate(6);

        return view('adeuaAndZuarat/adeua',['daysAdeua'=>$daysAdeua, 'publicAdeua'=>$publicAdeua]);
    }

    public function zuarat ()
    {
       $zuarat = AdeuaAndZuarat::where('category', AdeuaZuaratCategory::ZUARAT)->paginate(8);

        return view('adeuaAndZuarat/zuarat', ['zuarat'=>$zuarat]);
    }

    public function images ()
    {
        return view('adeuaAndZuarat/images');
    }

    public function videos ()
    {
        return view('adeuaAndZuarat/videos');
    }

    public function test ()
    {
        return view('adeuaAndZuarat/test');
    }
}
