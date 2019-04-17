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

Route::get("/page", "PageController@index");
Route::get("/page/charts", "PageController@charts");
Route::get("/page/tables", "PageController@tables");
Route::get("/page/buttons", "PageController@buttons");
Route::get("/page/cards", "PageController@cards");
Route::get("/page/animation", "PageController@animation");
Route::get("/page/border", "PageController@border");
Route::get("/page/color", "PageController@color");
Route::get("/page/other", "PageController@other");