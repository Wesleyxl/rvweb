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
Route::post("/contact", "HomeController@store")->name("contact");
Route::post("/simulation-fgts", "HomeController@fgtsSimulation")->name("fgts-simulation");

Route::get("/sua-voz", "ClaimsController@index")->name("claims");
