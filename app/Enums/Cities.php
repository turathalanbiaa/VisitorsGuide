<?php
/**
 * Created by PhpStorm.
 * User: qamar
 * Date: 8/26/18
 * Time: 8:44 AM
 */

namespace App\Enums;


class Cities
{
    const NAJ = "نجف";
    const BAGH = "بغداد";
    const QAD = "قادسية";
    const WAS = "واسط";
    const KAR = "كربلاء";
    const BAS = "بصرة";
    const KIR = "كركوك";
    const SUL = "سليمانية";
    const ARB = "اربيل";
    const DHU = "دهوك";
    const SAL = "صلاح الدين";
    const DIY = "ديالى";
    const BAB = "بابل";
    const MAY = "ميسان";
    const ANB = "انبار";
    const NIN = "نينوى";
    const MUTH = "مثنى";
    const THI = "ذي قار";

    const CITIES = array(
        "ar" => array(
            "نجف", "بغداد", "قادسية", "واسط", "كربلاء", "بصرة", "كركوك",
            "سليمانية", "اربيل", "دهوك", "صلاح الدين", "ديالى", "بابل",
            "ميسان", "انبار", "نينوى", "مثنى", "ذي قار",
        ),

        "en" => array(
            "نجف", "بغداد", "قادسية", "واسط", "كربلاء", "بصرة", "كركوك",
            "سليمانية", "اربيل", "دهوك", "صلاح الدين", "ديالى", "بابل",
            "ميسان", "انبار", "نينوى", "مثنى", "ذي قار",
        ),

        "far" => array(
            "نجف", "بغداد", "قادسية", "واسط", "كربلاء", "بصرة", "كركوك",
            "سليمانية", "اربيل", "دهوك", "صلاح الدين", "ديالى", "بابل",
            "ميسان", "انبار", "نينوى", "مثنى", "ذي قار",
        )
    );

    public static function getCityName($language, $index)
    {
        return self::CITIES[$language][$index];
    }

}