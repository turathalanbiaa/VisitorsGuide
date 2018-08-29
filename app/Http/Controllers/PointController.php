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

    public function streetView() {
        $source = Input::get("source");
        $destination = Input::get("destination");

        $direction = $destination>$source ? "forwards":"backwards";
        $numberOfColumn = abs($destination - $source);

        $distance = self::getDistance($numberOfColumn);
        $time = self::getTime($numberOfColumn);

        $publicPoints = Point::where("t_number", ">=", $source)
            ->where("t_number", "<=", $destination)
            ->where("category", PointCategory::PUBLIC)
            ->get();

        return [
            "distance" => $distance,
            "numberOfColumn" => $numberOfColumn,
            "direction" => $direction,
            "time" => $time,
            "publicPoints" => $publicPoints
        ];
    }

    public static function getDistance($numberOfColumn)
    {
        $language = App::getLocale();
        switch ($language) {
            case "ar": {$meter = " م"; $kiloMeter = " كم";} break;
            case "en": {$meter = " M"; $kiloMeter = " Km";} break;
            case "fa": {$meter = " M"; $kiloMeter = " Km";} break;
            default: {$meter = " م"; $kiloMeter = " كم";}
        }

        $distance = $numberOfColumn * 50;
        $distance = ($distance<1000)? ($distance.$meter):(($distance / 1000).$kiloMeter);
        return $distance;
    }

    public static function getTime($numberOfColumn) {
        $language = App::getLocale();
        switch ($language) {
            case "ar": {$minute = " دقيقة"; $hour = " ساعة";} break;
            case "en": {$minute = " Minute"; $hour = " Hour";} break;
            case "fa": {$minute = " دقيقه"; $hour = " ساعت";} break;
            default: {$minute = " دقيقة"; $hour = " ساعة";}
        }

        $time = round(($numberOfColumn*50)/83.3334);

        if ($time < 60)
            $time = $time.$minute ;
        else {
            $numberOfHour = (integer)($time/60).$hour;
            $numberOfMinute = ($time%60).$minute;
            $time = $numberOfHour." ،".$numberOfMinute;
        }

        return $time;
    }
}
