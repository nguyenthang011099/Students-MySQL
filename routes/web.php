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
    return view('welcome');
});

Route::get('/sortbyagedown', 'StudentController@sortbyagedown');
Route::get('/sortbyageup', 'StudentController@sortbyageup');
Route::get('/sortbyclass','StudentController@sortbyclass');
Route::get('/searchage','StudentController@searchage');
Route::get('/search','StudentController@search');




