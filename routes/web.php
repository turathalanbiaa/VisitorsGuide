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

@include("Emad.php");
@include("Fadhil.php");
@include("Ahmed.php");

@include("ControlPanel.php");

Route::get("/", "MainController@index")->middleware("setLocaleLanguage");
Route::get("/select-language", "MainController@selectLanguage");
Route::get("/register", "UserController@register");
Route::post("/register", "UserController@registerValidation");
Route::get("/login", "UserController@login");
Route::post("/login", "UserController@loginValidation");
Route::get("/logout", "UserController@logout");