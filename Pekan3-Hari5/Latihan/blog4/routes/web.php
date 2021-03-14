<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/post','PostController@index');
Route::get('/post/create','PostController@create');
Route::post('/post','PostController@store');
Route::get('/post/{post_id}','PostController@show');
Route::get('/post/{post_id}/edit','PostController@edit');
Route::PUT('/post/{post_id}','PostController@update');
Route::DELETE('/post/{post_id}','PostController@destroy');


Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');
Route::PUT('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');
Route::DELETE('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');


Route::get('/master',function(){
    return view('adminlte/master');
});

Route::get('/data-table',function(){
    return view('data-tables');
});

