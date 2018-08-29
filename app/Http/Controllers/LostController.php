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
        return view('lostGuide.index',compact('losts'));
    }

    public function findLost(){

        return view('lostGuide.find_lost');
    }
}
