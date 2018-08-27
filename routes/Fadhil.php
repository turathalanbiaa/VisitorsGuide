<?php
Route::get("/lost","LostController@index")->middleware("setLocaleLanguage");
