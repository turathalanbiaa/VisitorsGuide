<?php


Route::get('/adeua-and-zuarat/' , 'AdeuaAndZuaratController@zuarat');
Route::get('/adeua-and-zuarat/adeua' , 'AdeuaAndZuaratController@adeua');
Route::get('/adeua-and-zuarat/images' , 'AdeuaAndZuaratController@images');
Route::get('/adeua-and-zuarat/videos' , 'AdeuaAndZuaratController@videos');
Route::get('/adeua-and-zuarat/search-by-zuarat' , 'AdeuaAndZuaratController@searchByZuarat');
Route::get('/adeua-and-zuarat/search-by-adeua' , 'AdeuaAndZuaratController@searchByAdeua');
Route::get('/majales/add-majles' , 'MajalesController@addMajles')->middleware('userLogin');
Route::post('/majales/save-majles' , 'MajalesController@saveMajles')->name('save-majles')->middleware('userLogin');
Route::get('/majales/majalesy' , 'MajalesController@majalesy')->middleware('userLogin');
Route::post('/majales/delete-majles' , 'MajalesController@deleteMajles')->middleware('userLogin');
Route::get('/majales/update-majles-form/{id}' , 'MajalesController@updateMajlesForm')->middleware('userLogin');
Route::post('/majales/update-majles' , 'MajalesController@updateMajles')->middleware('userLogin');
Route::get('/majales/' , 'MajalesController@main');
Route::get('/majales/events-city/{city}' , 'MajalesController@getEventsByCity');
Route::get('/majales/events-upcoming' , 'MajalesController@getEventsUpcoming');
Route::get('/majales/events-started' , 'MajalesController@getEventsStarted');
Route::get('/majales/events-ended' , 'MajalesController@getEventsEnded');
Route::get('/majales/events-gallery' , 'MajalesController@getEventsGallery');