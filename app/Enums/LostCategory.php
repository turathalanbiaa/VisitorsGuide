<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 7/30/2018
 * Time: 9:49 AM
 */

namespace App\Enums;


class LostCategory
{
    const PERSON = 1;
    const Money = 2;
    const GOLD_PIECES = 3;
    const BAGS = 4;
    const MOBILE = 5;
    const OTHER = 6;

    public static function getCategory($category) {
        switch ($category) {
            case "1": return "أشخاص"; break;
            case "2": return "مبلغ من المال"; break;
            case "3": return "قطعه ذهبيه"; break;
            case "4":   return "حقائب"; break;
            case "5":   return "موبايل"; break;
            case "6":   return "أخرى"; break;
        }

        return "";
    }
}