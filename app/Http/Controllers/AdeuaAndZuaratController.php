<?php

namespace App\Http\Controllers;

use App\Enums\AdeuaZuaratCategory;
use App\Enums\PostCategory;
use App\Models\AdeuaAndZuarat;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdeuaAndZuaratController extends Controller
{

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

        $publicAdeua = AdeuaAndZuarat::where('category', AdeuaZuaratCategory::PUBLIC_ADEUA)->paginate(8);

        return view('adeuaAndZuarat/adeua',['daysAdeua'=>$daysAdeua, 'publicAdeua'=>$publicAdeua]);
    }

    public function zuarat ()
    {
       $zuarat = AdeuaAndZuarat::where('category', AdeuaZuaratCategory::ZUARAT)->paginate(8);

        return view('adeuaAndZuarat/zuarat', ['zuarat'=>$zuarat]);
    }

    public function images ()
    {
        $images = Post::whereNull('video_link')->paginate(10);
        return view('adeuaAndZuarat/images', ['images'=>$images]);
    }

    public function videos ()
    {
        $posts = Post::where('category', PostCategory::ADEUA_ZUARAT)
            ->whereNotNull('video_link')->paginate(10);
        return view('adeuaAndZuarat/videos', ['posts'=>$posts]);
    }

    public function searchByZuarat ()
    {
        $searchByZuarat = AdeuaAndZuarat::where('title', 'like', '%'.Input::get('search').'%')
            ->where('category', AdeuaZuaratCategory::ZUARAT)->paginate(10);
        return view('adeuaAndZuarat/search_by_zuarat', ['zuarat' => $searchByZuarat]);
    }

    public function searchByAdeua ()
    {
        $searchByAdeua = AdeuaAndZuarat::where('title', 'like', '%'.Input::get('search').'%')
            ->where('category', AdeuaZuaratCategory::PUBLIC_ADEUA)->paginate(10);
        return view('adeuaAndZuarat/search_by_adeua', ['publicAdeua'=>$searchByAdeua]);
    }
}
