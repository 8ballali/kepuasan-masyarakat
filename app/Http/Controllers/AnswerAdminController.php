<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerAdminController extends Controller
{
    public function add()
    {
        return view('admin.add-answer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'answer' => 'required',
            'bgcolor' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:20480'
        ]);

        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        Answer::create([
            'answer' => $request->answer,
            'bgcolor' => $request->bgcolor,
            'file' => $nama_file,

        ]);
        return redirect('/penilaian/admin');
    }

    public function edit($id)
    {
        $answer = Answer::find($id);
        return view('admin.edit-answer', ['answer' => $answer]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'answer' => 'required',
            'bgcolor' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:20480'

        ]);
        $answer = Answer::find($id);
        if ($request->file) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            @unlink(public_path('/') . '/data_file/' . $answer->file);
        }

        $answer->answer = $request->answer;
        $answer->bgcolor = $request->bgcolor;
        $answer->file = $nama_file;
        $answer->save();
        return redirect('/penilaian/admin');
    }

    public function delete($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect('/penilaian/admin');
    }
}
