<?php
Route::get("/lost","LostController@index")->middleware("setLocaleLanguage");
Route::get('/reception', "VisitorReceptionController@index")->middleware("setLocaleLanguage");
Route::get('session','VisitorReceptionController@my_session');
Route::get('/lost/add-lost-form', 'LostController@addLostForm')
    ->name('addLostForm')
    ->middleware("setLocaleLanguage");
Route::post('/lost/add-lost', 'LostController@addLost')
    ->name('addLost')
    ->middleware("setLocaleLanguage");