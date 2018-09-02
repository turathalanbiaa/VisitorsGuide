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
            "1"  => "سؤال حول الزيارة",
            "2"  => "سؤال حول نية الزيارة",
            "3"  => "سؤال حول الوضوء",
            "4"  => "سؤال حول الصلاة",
            "5"  => "سؤال حول السجود",
            "6"  => "سؤال حول صلاة المسافر",
            "7"  => "سؤال حول صلاة الجماعة",
            "8"  => "سؤال حول اللقطة",
            "9"  => "سؤال حول المشي لزيارة المراقد المقدسة",
            "10" => "أحكام متفرقة"
        ),
        "en" => array(
            "1"  => "Question About Zuarea",
            "2"  => "Question About Zuarea Intention",
            "3"  => "Question About Wudoo",
            "4"  => "Question About Prayer",
            "5"  => "Question About Prostration",
            "6"  => "Question About Traveler's Prayer",
            "7"  => "Question About Community Prayer",
            "8"  => "Question About The Shot",
            "9"  => "Question About Walk To The Holy Shrines",
            "10" => "Sporadic Provisions",
        ),
        "fa" => array(
            "1"  => "سوال در مورد بازدید",
            "2"  => "سوال در مورد قصد بازدید",
            "3"  => "سوال در مورد وودو",
            "4"  => "سوال در مورد نماز",
            "5"  => "سوال در مورد سجود",
            "6"  => "سوال در مورد نماز مسافر",
            "7"  => "سوال در مورد نماز جماعت",
            "8"  => "سوالات در مورد شوت",
            "9"  => "سوال در مورد پیاده روی برای دیدن زیارتگاه های مقدس",
            "10" => "مقررات متفرقه"
        ),
    );

    public static function getCategoryName($language, $category) {
        return self::QuestionCategory[$language][$category];
    }
}