<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function main()
    {
        $points = Point::all();

        return view('roadGuide.road_guide')->with([
            "points" => $points
        ]);
    }
}
