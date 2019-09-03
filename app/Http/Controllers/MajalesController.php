<?php

namespace App\Http\Controllers;

use App\Enums\MajlesStatus;
use App\Enums\PostCategory;
use App\Models\Majales;
use App\Models\Post;
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
           'district'=> 'required'
        ],
        [
            'majlesEnd.after'  => 'الرجاء اختار تاريخ صحيح للمناسبة',
            'majlesEnd.after_or_equal'   => 'الرجاء اختار تاريخ صحيح للمناسبة',
            'majlesStart.required' => 'الرجاء عدم ترك حقل تاريخ بدءالمناسبة فارغ',
            'majlesEnd.required' => 'الرجاء عدم ترك حقل تاريخ انتهاءالمناسبة فارغ',
            'description.required' => 'الرجاء كتابة وصف للمناسبة',
            'cities.required' => 'الرجاء اختيار المدينة',
            'district.required' => 'الرجاء كتابة اسم المنطقة'
        ]);

        $majales = new Majales();
        $majales->user_id      = session('USER_ID');
        $majales->description  = $request->description;
        $majales->majles_start = $request->majlesStart;
        $majales->majles_end   = $request->majlesEnd;
        $majales->city         = $request->cities;
        $majales->closes_point = $request->closesPoint;
        $majales->district     = $request->district;
        $majales->longitude    = $request->longitude;
        $majales->latitude     = $request->latitude;
        $majales->save();

       return redirect('/majales')->with('success', 'تمت اضافة المجلس بنجاح سوف ينشر بعد موافقة الادارة');
    }

    public function main ()
    {

        $getMajales = Majales::where('status', MajlesStatus::ACCEPT)->whereDate('majles_end','>=',Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')->paginate(4);

        return view('majales/main', ['events'=>$getMajales]);
    }

    public function getEventsByCity ($city)
    {
        $getEventsByCity = Majales::where('status', MajlesStatus::ACCEPT)
            ->where('city',$city)->orderBy('majles_start')
            ->orderBy('majles_start')->paginate(10);

        return view('/majales/events_city', ['events'=>$getEventsByCity]);
    }

    public function getEventsUpcoming ()

    {
        $getEventsUpcoming = Majales::where('status', MajlesStatus::ACCEPT)
            ->whereDate('majles_start', '>', Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')->paginate(10);

        return view('/majales/events_upcoming', ['events'=>$getEventsUpcoming]);
    }

    public function getEventsStarted ()
    {
        $getEventsStarted = Majales::where('status', MajlesStatus::ACCEPT)
            ->whereDate('majles_start', '<=', Carbon::now()->format('y-m-d'))
            ->whereDate('majles_end', '>=', Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')
            ->paginate(10);

        return view('/majales/events_started', ['events'=>$getEventsStarted]);
    }

    public function getEventsEnded ()
    {
        $getEventsEnded = Majales::where('status', MajlesStatus::ACCEPT)
            ->whereDate('majles_end', '<', Carbon::now()->format('y-m-d'))
            ->orderBy('majles_start')
            ->paginate(10);

        return view('/majales/events_ended', ['events'=>$getEventsEnded]);
    }

    public function getEventsGallery ()
    {
        $posts = Post::where('category', PostCategory::MAJALES)->paginate(8);

        return view('/majales/events_gallery', ['posts'=>$posts]);
    }

    public function majalesy ()
    {
        $majalesy = Majales::where('user_id', session('USER_ID'))->get();

        return view('/majales/majalesy', ['majalesy'=>$majalesy]);
    }

    public function updateMajlesForm ($id)
    {
        $majles = Majales::findOrFail($id);
        return view('majales/update_majles',['majles'=>$majles]);
    }

    public function updateMajles (Request $request)
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
                'majlesEnd.after_or_equal'   => 'الرجاء اختار تاريخ صحيح للمناسبة',
                'majlesStart.required' => 'الرجاء عدم ترك حقل تاريخ بدءالمناسبة فارغ',
                'majlesEnd.required' => 'الرجاء عدم ترك حقل تاريخ انتهاءالمناسبة فارغ',
                'description.required' => 'الرجاء كتابة وصف للمناسبة',
                'cities.required' => 'الرجاء اختيار المدينة',
                'district.required' => 'الرجاء كتابة اسم المنطقة',
                'closesPoint.required' => 'الرجاء كتابة عنوان اقرب نقطة دالة',
            ]);
        $majles =Majales::findOrFail($request->id);
        if($majles->user_id == session('USER_ID'))
        {
            $majles->user_id      = session('USER_ID');
            $majles->description  = $request->description;
            $majles->majles_start = $request->majlesStart;
            $majles->majles_end   = $request->majlesEnd;
            $majles->city         = $request->cities;
            $majles->closes_point = $request->closesPoint;
            $majles->district     = $request->district;
            $majles->save();
            redirect('/majales/majalesy')->with('update','تم تعديل المجلس بنجاح');
        }

        return redirect('/majales/majalesy');

    }

    public function deleteMajles (Request $request)
    {
        $delete = Majales::findOrFail($request->id);
        if($delete->user_id == session('USER_ID'))
        {
            $delete->delete();
            redirect('/majales/majalesy')->with('delete','تم حـذف المجلس بنجاح');
        }

        return redirect('/majales/majalesy');
    }
}
