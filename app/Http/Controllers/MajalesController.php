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

        $getMajales = Majales::whereDate('majles_end','>=',Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')->paginate(4);

        return view('majales/main', ['events'=>$getMajales]);
    }

    public function getEventsByCity ($city)
    {
        $getEventsByCity = Majales::where('city',$city)->orderBy('majles_start')
            ->orderBy('majles_start')->paginate(10);

        return view('/majales/events_city', ['events'=>$getEventsByCity]);
    }

    public function getEventsUpcoming ()

    {
        $getEventsUpcoming = Majales::whereDate('majles_start', '>', Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')->paginate(10);

        return view('/majales/events_city', ['events'=>$getEventsUpcoming]);
    }

    public function getEventsStarted ()
    {
        $getEventsStarted = Majales::whereDate('majles_start', '<=', Carbon::now()->format('y-m-d'))
            ->whereDate('majles_end', '>=', Carbon::now()->format('y-m-d'))->orderBy('majles_start')
            ->paginate(10);

        return view('/majales/events_city', ['events'=>$getEventsStarted]);
    }

    public function getEventsEnded ()
    {
        $getEventsEnded = Majales::whereDate('majles_end', '<', Carbon::now()->format('y-m-d'))->orderBy('majles_start')
            ->paginate(10);

        return view('/majales/events_city', ['events'=>$getEventsEnded]);
    }
}
