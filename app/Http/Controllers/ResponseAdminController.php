<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Response;

class ResponseAdminController extends Controller
{
    public function index(){
        $response = Response::All();
        $answer = Answer::All();
        return view('admin.response', compact('response', 'answer'));
    }

    public function edit($id){

            $response = Response::find($id);
            return view('admin.edit-response', compact('response'));
        }

        public function update ($id, Request $request){
            $this->validate($request,[
                'answer_id' => 'required'
            ]);

            $response = Response::find($id);
            $response->response = $request->response;
            $response->save();
            return redirect('/penilaian/admin/response');
        }

        public function delete($id){
            $response = Response::find($id);
            $response->delete();
            return redirect ('/penilaian/admin/response');
        }
}
