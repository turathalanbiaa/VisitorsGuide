<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 9/9/2018
 * Time: 9:00 AM
 */

Route::get('/control-panel/majales', "ControlPanelController@managementMajales");
Route::post('/control-panel/majles/accept', "ControlPanelController@acceptMajles");
Route::post('/control-panel/majles/reject', "ControlPanelController@rejectMajles");
Route::post('/control-panel/majles/delete', "ControlPanelController@deleteMajles");

Route::get("/control-panel/center/login", "ControlPanelController@centerLogin");
Route::post("/control-panel/center/login", "ControlPanelController@centerLoginValidation");
Route::get("/control-panel/center/logout", "ControlPanelController@centerLogout");
Route::get("/control-panel/center", "ControlPanelController@managementCenter")->middleware("centerLogin");
Route::get("/control-panel/center/add-lost", "ControlPanelController@addLost")->middleware("centerLogin");
Route::post("/control-panel/center/add-lost", "ControlPanelController@addLostValidation")->middleware("centerLogin");

Route::get("/123456789123456789/new_point", "ControlPanelController@new_point");
Route::post("/123456789123456789/insert_point", "ControlPanelController@insert_point");

Route::get("/123456789123456789/all_point", "ControlPanelController@all_point");

Route::get("/123456789123456789/edit_point/{id}", "ControlPanelController@edit_point");
Route::post("/123456789123456789/update_point/{id}", "ControlPanelController@update_point");

Route::get("/123456789123456789/ensure_delete/{id}", "ControlPanelController@ensure_delete");
Route::get("/123456789123456789/delete_point/{id}", "ControlPanelController@delete_point");

Route::get("/about_app", function (){return view("/about_app");});