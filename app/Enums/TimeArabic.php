<?php
/**
 * Created by PhpStorm.
 * User: qamar
 * Date: 9/3/18
 * Time: 9:02 AM
 */

namespace App\Enums;


class TimeArabic
{

    const PM = "مساءً";
    const AM = "صباحاً";

    public static function getTimeInArabic ($time)
    {

        switch ($time)
        {
            case 'PM': return self::AM; break;
            case 'AM': return self::PM; break;
        }

    }

}