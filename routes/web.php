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

Route::get('/', function () {
    return view('main');
});
