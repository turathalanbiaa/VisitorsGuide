<?php
Route::get("/lost","LostController@index")->middleware("setLocaleLanguage");
Route::get('/reception', "VisitorReceptionController@index")->middleware("setLocaleLanguage");