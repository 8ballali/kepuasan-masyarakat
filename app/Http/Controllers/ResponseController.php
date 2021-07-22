<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public function store(Request $request)
    {
        Response::create([
            'answer_id' => $request->answer_id
        ]);
        return view('user.thankyou');
    }
}
