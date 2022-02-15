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

Route::get("/", "HomeController@index")->name("Home");
Route::get("/simulacao", "SimulationController@index")->name("fgts");
Route::get("/sua-voz", "ClaimsController@index")->name("claims");
