<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  return view('welcome');
//});

Auth::routes();

Route::group(['middleware' => 'admin'], function () {
  Route::get('/penilaian/admin', 'AdminController@index');
  // Route::get('/e-vote/admin/dashboard', 'AdminController@dashboard');
  Route::get('/penilaian/admin/answer/add', 'AnswerAdminController@add');
  Route::post('/penilaian/admin/answer/store', 'AnswerAdminController@store');
  Route::get('/penilaian/admin/answer/edit/{id}', 'AnswerAdminController@edit');
  Route::put('/penilaian/admin/answer/update/{id}', 'AnswerAdminController@update');
  Route::get('/penilaian/admin/answer/delete/{id}', 'AnswerAdminController@delete');
  Route::get('/penilaian/admin/response', 'ResponseAdminController@index');
  Route::get('/penilaian/admin/response/edit/{id}', 'ResponseAdminController@edit');
  Route::put('/penilaian/admin/response/update/{id}', 'ResponseAdminController@update');
  Route::get('/penilaian/admin/response/delete/{id}', 'ResponseAdminController@delete');
  Route::get('/penilaian/admin/statistik', 'StatistikController@index');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'AnswerController@index');
Route::get('/penilaian/user', 'AnswerController@index');
Route::get('/penilaian', 'AnswerController@index');
Route::get('/penilaian/store', 'AnswerController@store');
Route::post('/penilaian/response', 'ResponseController@store');
Route::get('/thankyou', function () {
  return view('/thankyou');
});
