<?php


Route::get('/adeua-and-zuarat/' , 'AdeuaAndZuaratController@zuarat');
Route::get('/adeua-and-zuarat/adeua' , 'AdeuaAndZuaratController@adeua');
Route::get('/adeua-and-zuarat/images' , 'AdeuaAndZuaratController@images');
Route::get('/adeua-and-zuarat/videos' , 'AdeuaAndZuaratController@videos');
Route::get('/adeua-and-zuarat/search-by-zuarat' , 'AdeuaAndZuaratController@searchByZuarat');
Route::get('/adeua-and-zuarat/search-by-adeua' , 'AdeuaAndZuaratController@searchByAdeua');
Route::get('/majales/add-majles' , 'MajalesController@addMajles');
Route::post('/majales/save-majles' , 'MajalesController@saveMajles')->name('save-majles');
Route::get('/majales/' , 'MajalesController@main');
Route::get('/majales/events-city/{city}' , 'MajalesController@getEventsByCity');
Route::get('/majales/events-upcoming' , 'MajalesController@getEventsUpcoming');
Route::get('/majales/events-started' , 'MajalesController@getEventsStarted');
Route::get('/majales/events-ended' , 'MajalesController@getEventsEnded');
Route::get('/majales/events-gallery' , 'MajalesController@getEventsGallery');
Route::get('/majales/post-views/{id}' , 'MajalesController@postViews');
Route::get('/majales/test' , function (){
});
