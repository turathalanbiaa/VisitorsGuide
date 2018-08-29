<?php
Route::get("/lost","LostController@index")->middleware("setLocaleLanguage");
Route::get("/find","LostController@findLost")->middleware("setLocaleLanguage");
