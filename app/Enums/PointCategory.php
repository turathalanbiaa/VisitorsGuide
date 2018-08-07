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

    public static function getCategoryColor($category) {
        switch ($category) {
            case "1": return "success"; break;
            case "2": return "info"; break;
            case "3": return "warning"; break;
        }

        return "";
    }

    public static function getCategoryIcon($category) {
        switch ($category) {
            case "1": return "fa-hotel"; break;
            case "2": return "fa-bath"; break;
            case "3": return "fa-map-marked-alt"; break;
        }

        return "";
    }
}