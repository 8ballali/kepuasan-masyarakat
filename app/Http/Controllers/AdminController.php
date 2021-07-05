<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        $answer = Answer::All();
        return view('admin.answer', ['answer'=> $answer]);
    }

}
