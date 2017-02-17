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
Route::get('/calc','helloController@index');
Route::post('/calc','helloController@add');

Route::get('/mul','proController@index');
Route::post('/mul','proController@mul');

Route::get('/todo','todoController@index');
Route::post('/todo','todoController@show');