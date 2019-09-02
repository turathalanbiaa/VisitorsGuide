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
    const AM = "صباحاً";
    const PM = "مساءً";

    public static function getTimeInArabic ($time)
    {

        switch ($time)
        {
            case 'AM': return self::AM; break;
            case 'PM': return self::PM; break;
        }

    }

}