<?php

namespace App\Http\Controllers;

use App\Enums\Cities;
use App\Enums\WeekDays;
use App\Models\Majales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MajalesController extends Controller
{


    public function addMajles ()
    {

        return view('majales/add_majles');

    }

    public function saveMajles (Request $request)
    {

        $request->validate([
           'majlesEnd'=> 'required|date|after_or_equal:today|date|after:majlesStart',
           'majlesStart'=> 'required',
           'description'=> 'required',
           'cities'=> 'required',
           'district'=> 'required',
           'closesPoint'=> 'required',
        ],
        [
            'majlesEnd.after'  => 'الرجاء اختار تاريخ صحيح للمناسبة',
            'majlesStart.required' => 'الرجاء عدم ترك حقل تاريخ بدءالمناسبة فارغ',
            'majlesEnd.required' => 'الرجاء عدم ترك حقل تاريخ انتهاءالمناسبة فارغ',
            'description.required' => 'الرجاء كتابة وصف للمناسبة',
            'cities.required' => 'الرجاء اختيار المدينة',
            'district.required' => 'الرجاء كتابة اسم المنطقة',
            'closesPoint.required' => 'الرجاء كتابة عنوان اقرب نقطة دالة',
        ]);

        $majales = new Majales();
        $majales->user_id      = 22;
        $majales->description  = $request->description;
        $majales->majles_start = $request->majlesStart;
        $majales->majles_end   = $request->majlesEnd;
        $majales->city         = $request->cities;
        $majales->closes_point = $request->closesPoint;
        $majales->district     = $request->district;
        $majales->longitude    = $request->longitude;
        $majales->latitude     = $request->latitude;
        $majales->save();

       return "ahmed";
    }

    public function main ()
    {

        $date = Carbon::now();
        $getMajales = Majales::where('majles_end','>=',$date->format('y-m-d'))->orderBy('majles_start')->get();

        return view('majales/main');
    }

    public function getEventsByCity ($city)
    {
        $getEventsByCity = Majales::where('city',$city)->paginate(10);
        if ($getEventsByCity->count() === 0)
        {
            redirect('/majales/city')->with('notFond', 'لم يتم العثور علي بيانات لعرضها');
        }
        return view('/majales/events_city', ['events'=>$getEventsByCity]);
    }

}
