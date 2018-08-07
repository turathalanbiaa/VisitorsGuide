<?php

namespace App\Http\Controllers;

use App\Enums\PointCategory;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PointController extends Controller
{
    public function main() {
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

        return view('roadGuide.road_guide')->with([
            "allPoints" => $allPoints,
            "mawakepPoints" => $mawakepPoints,
            "hemamatPoints" => $hemamatPoints,
            "publicPoints" => $publicPoints
        ]);
    }

    public function streetView() {
        $source = Input::get("source");
        $destination = Input::get("destination");

        $direction = $destination>$source ? "positive":"negative";
        $numberOfColumn = abs($destination - $source);
        $distance =  $numberOfColumn * 50;

        $hemamatPoints = Point::where("t_number", ">=", $source)
            ->where("t_number", "<=", $destination)
            ->where("category", PointCategory::HEMAMAT)
            ->get();

        $publicPoints = Point::where("t_number", ">=", $source)
            ->where("t_number", "<=", $destination)
            ->where("category", PointCategory::PUBLIC)
            ->get();

        return [
            "distance" => $distance,
            "numberOfColumn" => $numberOfColumn,
            "direction" => $direction,
            "hemamatPoints" => $hemamatPoints,
            "publicPoints" => $publicPoints
        ];
    }
}
