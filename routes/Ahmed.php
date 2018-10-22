<?php
use Illuminate\Support\Facades\Route;

Route::get('/adeua-and-zuarat/' , 'AdeuaAndZuaratController@zuarat')
    ->name('main')
    ->middleware("setLocaleLanguage");


Route::get('/adeua-and-zuarat/adeua' , 'AdeuaAndZuaratController@adeua')
    ->name('adeua')
    ->middleware("setLocaleLanguage");

Route::get('/adeua-and-zuarat/images' , 'AdeuaAndZuaratController@images')
    ->name('image')
    ->middleware("setLocaleLanguage");

Route::get('/adeua-and-zuarat/videos' , 'AdeuaAndZuaratController@videos')
    ->name('videos')
    ->middleware("setLocaleLanguage");

Route::get('/adeua-and-zuarat/search-by-zuarat' , 'AdeuaAndZuaratController@searchByZuarat')
    ->name('searchByZuarat')
    ->middleware("setLocaleLanguage");

Route::get('/adeua-and-zuarat/search-by-adeua' , 'AdeuaAndZuaratController@searchByAdeua')
    ->name('searchByAdeua')
    ->middleware("setLocaleLanguage");


Route::get('/majales/add-majles' , 'MajalesController@addMajles')
    ->name('addMajles')
    ->middleware('userLogin')
    ->middleware("setLocaleLanguage");

Route::post('/majales/save-majles' , 'MajalesController@saveMajles')
    ->name('saveMajles')
    ->middleware('userLogin')
    ->middleware("setLocaleLanguage");

Route::get('/majales/majalesy' , 'MajalesController@majalesy')
    ->name('majalesy')
    ->middleware('userLogin')
    ->middleware("setLocaleLanguage");

Route::post('/majales/delete-majles' , 'MajalesController@deleteMajles')
    ->name('deleteMajles')
    ->middleware('userLogin')
    ->middleware("setLocaleLanguage");

Route::get('/majales/update-majles-form/{id}' , 'MajalesController@updateMajlesForm')
    ->name('updateMajlesForm')
    ->middleware('userLogin');

Route::post('/majales/update-majles' , 'MajalesController@updateMajles')
    ->name('updateMajles')
    ->middleware('userLogin')
    ->middleware("setLocaleLanguage");

Route::get('/majales/' , 'MajalesController@main')
    ->name('majales')
    ->middleware("setLocaleLanguage");

Route::get('/majales/events-city/{city}' , 'MajalesController@getEventsByCity')
    ->name('eventsCity')
    ->middleware("setLocaleLanguage");

Route::get('/majales/events-upcoming' , 'MajalesController@getEventsUpcoming')
    ->name('eventsUpcoming')
    ->middleware("setLocaleLanguage");

Route::get('/majales/events-started' , 'MajalesController@getEventsStarted')
    ->name('eventsStarted')
    ->middleware("setLocaleLanguage");

Route::get('/majales/events-ended' , 'MajalesController@getEventsEnded')
    ->name('eventsEnded')
    ->middleware("setLocaleLanguage");

Route::get('/majales/events-gallery' , 'MajalesController@getEventsGallery')
    ->name('eventsGallery')
    ->middleware("setLocaleLanguage");
