<?php
Route::get("/losts","LostController@index")->middleware("setLocaleLanguage");
Route::get("/find","LostController@findLost")->middleware("setLocaleLanguage");
