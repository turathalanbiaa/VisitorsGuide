<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    public function index(){
        $lang = App::getLocale();
        if (Input::get("category"))
            $questions = Question::where("lang", $lang)
                ->where("category", Input::get("category"))
                ->orderBy("id", "ASC")
                ->simplePaginate(20);
        else
            $questions = Question::where("lang", $lang)
                ->orderBy("id", "DESC")
                ->simplePaginate(20);

        return view("visitorFeqh.visitor_feqh")->with([
            "questions" => $questions
        ]);
    }

    public function showImage($name) {
        return view("visitorFeqh.show-image")->with([
            "name" => $name
        ]);
    }
}
