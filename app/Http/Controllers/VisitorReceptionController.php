<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorReceptionController extends Controller
{
    public function index() {

        return view('VisitorReception.show_adds');
    }
}
