<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class VisitorFeqhController extends Controller
{
    public function index(){
        $questions = Question::orderBy("date", "DESC")->simplePaginate(20);

        return view("visitorFeqh.visitor_feqh")->with([
            "questions" => $questions
        ]);
    }
}
