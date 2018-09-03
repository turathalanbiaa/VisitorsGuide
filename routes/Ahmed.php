<?php



Route::get('/adeuaAndZuarat/' , 'AdeuaAndZuaratController@home');
Route::get('/adeuaAndZuarat/zuarat' , 'AdeuaAndZuaratController@zuarat');
Route::get('/adeuaAndZuarat/adeua' , 'AdeuaAndZuaratController@adeua');
Route::get('/adeuaAndZuarat/images' , 'AdeuaAndZuaratController@images');
Route::get('/adeuaAndZuarat/videos' , 'AdeuaAndZuaratController@videos');
Route::get('/adeuaAndZuarat/test' , 'AdeuaAndZuaratController@test');
Route::get('/majales/add_majles' , 'MajalesController@addMajles');
Route::post('/majales/save_majles' , 'MajalesController@saveMajles')->name('saveMajles');
Route::get('/majales/main' , 'MajalesController@main');