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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  'PastebinController@main');
Route::post('/', 'PastebinController@post');

Auth::routes();

Route::get('myrecs', 'HomeController@index');

// Route::get('test', 'PastebinController@test');
Route::get('{pasterec}', ['as' => 'show', 'uses' => 'PastebinController@show']);



