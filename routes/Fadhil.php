<?php
<<<<<<< HEAD
Route::get("/losts","LostController@index")->middleware("setLocaleLanguage");
=======

Route::get("/lost","LostController@index")->middleware("setLocaleLanguage");
>>>>>>> 5e6bb1ef3fdf8c05642d157dc5d3f28fef22e032
Route::get("/find","LostController@findLost")->middleware("setLocaleLanguage");

Route::get('/show_adds', "VisitorReceptionController@index")->middleware("setLocaleLanguage");