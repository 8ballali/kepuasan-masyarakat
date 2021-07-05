<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{
    public function index (){

        $label = DB::table('response')->selectRaw(DB::raw('count(*) as answer'))->groupBy('answer_id')->orderBy('answer_id', 'asc')->get()->map(function($x) {
       return $x->answer;
       });

       $data = DB::table('answer')->join('response', 'response.answer_id', 'answer.id')->groupBy('answer')->select('answer.answer')->orderBy('answer.id', 'asc')->get(
       )->map(function($x) {
       return $x->answer;
       });



   return view('admin.statistik', ['label' => $label, 'data' => $data]);

}
}
