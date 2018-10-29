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
    // return "Hello Hackerspace";
    // return view('welcome');
// return("HackerSpaceController@home")
// });


Route::get('/', [ 'uses' => 'HackerSpaceController@home', 'as' => 'admin.index']);
