<?php

namespace App\Http\Controllers;

use App\Enums\PointCategory;
use App\Models\Point;
use Illuminate\Support\Facades\Input;

class PointController extends Controller
{
    public function index()
    {
        $city = 0;

        $allPoints = Point::OrderBy("t_number")->where("city",$city)->where("t_number",">","0")
            ->get();
        $mawakepPoints = Point::where("category", PointCategory::MAWAKEP)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();
        $hemamatPoints = Point::where("category", PointCategory::HEMAMAT)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();
        $publicPoints = Point::where("category", PointCategory::PUBLIC)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();
        $lostCenterPoints = Point::where("category", PointCategory::LOST_CENTER)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();
        $referendumCenterPoints = Point::where("category", PointCategory::REFERENDUM_CENTER)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();
        $medicalCenterPoints = Point::where("category", PointCategory::MEDICAL_CENTER)->where("city",$city)->where("t_number",">","0")
            ->orderBy("t_number")
            ->get();

        return view('roadGuide.road_guide')->with([
            "allPoints" => $allPoints,
            "mawakepPoints" => $mawakepPoints,
            "hemamatPoints" => $hemamatPoints,
            "publicPoints" => $publicPoints,
            "lostCenterPoints" => $lostCenterPoints,
            "referendumCenterPoints" => $referendumCenterPoints,
            "medicalCenterPoints" => $medicalCenterPoints,
        ]);
    }

    public function getPublicPoints()
    {
        $source = Input::get("source");
        $destination = Input::get("destination");

        $publicPoints = Point::where("t_number", ">=", $source)
            ->where("t_number", "<=", $destination)
            ->where("category", PointCategory::PUBLIC)
            ->get();

        return ["publicPoints" => $publicPoints];
    }

    public function shwoMaps ()
    {
        $latAndLong = Point::orderBy('id')->get()->toArray();
        return view('roadGuide.maps',compact('latAndLong'));
    }
}
