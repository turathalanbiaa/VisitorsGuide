<?php
/**
 * Created by PhpStorm.
 * User: qamar
 * Date: 9/1/18
 * Time: 10:03 AM
 */

namespace App\Enums;


use phpDocumentor\Reflection\Types\Self_;

class WeekDays
{
    const SATURDAY  = "السبت";
    const SUNDAY    = "الاحد";
    const MONDAY    = "الاثنين";
    const TUESDAY   = "الثلاثاء";
    const WEDNESDAY = "الاربعاء";
    const THURSDAY  = "الخميس";
    const FRIDAY    = "الجمعة";

    public static function nameOfDays ($day)
    {
        switch ($day) {

            case 'Saturday' : return Self::SATURDAY; break;
            case 'Sunday'   : return Self::SUNDAY; break;
            case 'Monday'   : return Self::MONDAY; break;
            case 'Tuesday'  : return Self::TUESDAY; break;
            case 'Wednesday': return Self::WEDNESDAY; break;
            case 'Thursday' : return Self::THURSDAY; break;
            case 'Friday'   : return Self::FRIDAY; break;
        }

        return "";

    }

}