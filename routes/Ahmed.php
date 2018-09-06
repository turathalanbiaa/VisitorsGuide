<?php



Route::get('/adeua-and-zuarat/' , 'AdeuaAndZuaratController@home');
Route::get('/adeua-and-zuarat/zuarat' , 'AdeuaAndZuaratController@zuarat');
Route::get('/adeua-and-zuarat/adeua' , 'AdeuaAndZuaratController@adeua');
Route::get('/adeua-and-zuarat/images' , 'AdeuaAndZuaratController@images');
Route::get('/adeua-and-zuarat/videos' , 'AdeuaAndZuaratController@videos');
Route::get('/adeua-and-zuarat/test' , 'AdeuaAndZuaratController@test');
Route::get('/majales/add-majles' , 'MajalesController@addMajles');
Route::post('/majales/save-majles' , 'MajalesController@saveMajles')->name('save-majles');
Route::get('/majales/main' , 'MajalesController@main');
Route::get('/majales/city/{$city}' , 'MajalesController@getEventsByCity');
Route::get('/majales/event/upcoming' , 'MajalesController@upcoming');
Route::get('/majales/event/started' , 'MajalesController@started');
Route::get('/majales/event/ended' , 'MajalesController@ended');