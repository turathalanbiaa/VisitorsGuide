<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 7/30/2018
 * Time: 9:17 AM
 */

namespace App\Enums;


class PointCategory
{
    const MAWAKEP = 1;
    const HEMAMAT = 2;
    const PUBLIC = 3;
    const CENTER = 4;

    public static function getCategoryColor($category) {
        switch ($category) {
            case "1": return "green"; break;
            case "2": return "teal"; break;
            case "3": return "pink"; break;
            case "4": return "orange"; break;
        }
        return "";
    }

    public static function getCategoryIcon($category) {
        switch ($category) {
            case "1": return "fa-hotel"; break;
            case "2": return "fa-bath"; break;
            case "3": return "fa-map-marked-alt"; break;
            case "4": return "fa-bullhorn"; break;
        }
        return "";
    }
}