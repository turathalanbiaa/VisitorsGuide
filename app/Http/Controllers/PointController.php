<?php

namespace App\Http\Controllers;

use App\Enums\PointCategory;
use App\Models\Point;
use Illuminate\Support\Facades\Input;

class PointController extends Controller
{
    public function index()
    {
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
        $lostCenterPoints = Point::where("category", PointCategory::LOST_CENTER)
            ->orderBy("t_number")
            ->get();
        $referendumCenterPoints = Point::where("category", PointCategory::REFERENDUM_CENTER)
            ->orderBy("t_number")
            ->get();
        $medicalCenterPoints = Point::where("category", PointCategory::MEDICAL_CENTER)
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
}
