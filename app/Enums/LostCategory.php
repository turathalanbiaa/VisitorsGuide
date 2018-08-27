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
    public static function getCategory($category) {
        switch ($category) {
            case "1": return "انسان"; break;
            case "2": return "مبلغ من المال"; break;
            case "3": return "قطعه ذهبيه"; break;
            case "4": return "حقيبة"; break;
        }
        return "";
    }
}