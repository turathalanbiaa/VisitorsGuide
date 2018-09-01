<?php

namespace App\Http\Controllers;

use App\Enums\PointCategory;
use App\Models\Point;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class PointController extends Controller
{
    public function index() {
        $allPoints = Point::OrderBy("t_number")
            ->get();
        $mawakepPoints = Point::where("category", PointCategory::MAWAKEP)
            ->orderBy("t_number")
            ->get();
        $hemamatPoints = Point::where("category", PointCategory::HEMAMAT)
            ->orderBy("t_number")
            ->get();
        $publicPoints = Point::where("category", PointCategory::PUBLIC)
            ->orderBy("t_number")
            ->get();
        $centerPoints = Point::where("category", PointCategory::CENTER)
            ->orderBy("t_number")
            ->get();

        return view('roadGuide.road_guide')->with([
            "allPoints" => $allPoints,
            "mawakepPoints" => $mawakepPoints,
            "hemamatPoints" => $hemamatPoints,
            "publicPoints" => $publicPoints,
            "centerPoints" => $centerPoints
        ]);
    }

    public function getPublicPoints() {
        $source = Input::get("source");
        $destination = Input::get("destination");

        $publicPoints = Point::where("t_number", ">=", $source)
            ->where("t_number", "<=", $destination)
            ->where("category", PointCategory::PUBLIC)
            ->get();

        return ["publicPoints" => $publicPoints];
    }
}
