<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lost;
class LostController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $losts = Lost::search($request->search)->paginate(3);
        }else{
            $losts = Lost::paginate(3);
        }
        return view('lostGuide.index');
    }

    public function findLost(){

        return view('lostGuide.find_lost');
    }

    public function addLostForm ()
    {
        return view('lostGuide.add_lost');
    }

    public function addLost (Request $request)
    {
        $this->validate($request,[
            'description'=> 'required',
            'category'=> 'required',
            'type'=> 'required'
        ]);

        $lost = new Lost();
        $lost->center_id   = 1;
        $lost->description = $request->description;
        $lost->category    = $request->category;
        $lost->type        = $request->type;
        $lost->datetime    = date("Y-m-d H:i:s");
        $lost->save();
        return redirect(route('addLostForm'))->with('success', 'تمت اضافة الاعلان');
    }
}
