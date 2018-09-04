<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{
    public function index(){
        if (Input::get("category"))
            $questions = Question::where("category", Input::get("category"))
                ->orderBy("id", "ASC")
                ->simplePaginate(20);
        else
            $questions = Question::orderBy("id", "DESC")
                ->simplePaginate(20);

        return view("visitorFeqh.visitor_feqh")->with([
            "questions" => $questions
        ]);
    }
}
