<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Response;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index(){
        $answer = Answer::All();
        return view('user.index', ['answer'=> $answer]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'answer_id'=> 'required'
        ]);

        Response::create([
            'answer_id' => $request->answer_id,
        ]);
        return redirect('/penilaian');
        }
}
