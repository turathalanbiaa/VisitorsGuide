<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 10/6/2018
 * Time: 11:01 AM
 */

namespace App\Enums;


class WayCategory
{
    const NAJ_KAR_WAY = 1;
    const BAG_KAR_WAY = 2;
    const BAB_KAR_WAY = 3;

    public static function getWay($way) {
        switch ($way) {
            case "1": return "طريق نجف - كربلاء"; break;
            case "2": return "طريق بغداد - كربلاء"; break;
            case "3": return "طريق حلة - كربلاء"; break;
            default: return "طريق نجف - كربلاء";
        }
    }
}