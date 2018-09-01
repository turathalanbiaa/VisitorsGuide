<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::orderBy("id", "DESC")->simplePaginate(20);

        return view("visitorFeqh.visitor_feqh")->with([
            "questions" => $questions
        ]);
    }
}
