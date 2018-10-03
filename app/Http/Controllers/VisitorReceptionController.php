<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VisitorReceptionController extends Controller
{
    public function index() {
        session(['user_id' => 1]);
        return view('VisitorReception.index');

    }
    function my_session(){
        return response()->json(session()->get('user_id'));
    }

}
