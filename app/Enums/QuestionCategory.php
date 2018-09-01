<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 9/1/2018
 * Time: 1:50 PM
 */

namespace App\Enums;


class QuestionCategory
{
    const QA_ZUAREA = 1;
    const QA_ZUAREA_INTENTION = 2;
    const QA_WUDOO = 3;
    const QA_PRAYER = 4;
    const QA_PROSTRATION = 5;
    const QA_TRAVELERS_PRAYER = 6;
    const QA_COMMUNITY_PRAYER = 7;
    const QA_THE_SHOT = 8;
    const QA_WALK_TO_THE_HOLY_SHRINES = 9;
    const SPORADIC_PROVISIONS = 10;

    const QuestionCategory = array(
        "ar" => array(
            "1"  => "مسائل حول الزيارة",
            "2"  => "مسائل حول نية الزيارة",
            "3"  => "مسائل حول الوضوء",
            "4"  => "مسائل حول الصلاة",
            "5"  => "مسائل حول السجود",
            "6"  => "مسائل حول صلاة المسافر",
            "7"  => "مسائل حول صلاة الجماعة",
            "8"  => "مسائل حول اللقطة",
            "9"  => "مسائل حول المشي لزيارة المراقد المقدسة",
            "10" => "أحكام متفرقة"
        ),
        "en" => array(
            "1"  => "Question about zuarea",
            "2"  => "Question about zuarea intention",
            "3"  => "Question about wudoo",
            "4"  => "Question about prayer",
            "5"  => "Question about prostration",
            "6"  => "Question about traveler's prayer",
            "7"  => "Question about community prayer",
            "8"  => "Question about the shot",
            "9"  => "Question about walk to the holy shrines",
            "10" => "Sporadic provisions",
        ),
        "fa" => array(
            "1"  => "سوالات در مورد بازدید",
            "2"  => "سوالات در مورد قصد بازدید",
            "3"  => "سوالات در مورد وودو",
            "4"  => "سوالات در مورد نماز",
            "5"  => "سوالات در مورد سجود",
            "6"  => "سوالات در مورد نماز مسافر",
            "7"  => "سوالات در مورد نماز جماعت",
            "8"  => "سوالات در مورد شوت",
            "9"  => "سوالات در مورد پیاده روی برای دیدن زیارتگاه های مقدس",
            "10" => "مقررات متفرقه"
        ),
    );

    public static function getCategoryName($language, $category) {
        return self::QuestionCategory[$language][$category];
    }
}