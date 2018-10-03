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

Route::get("/control-panel/point/new_point", "ControlPanelController@new_point");
Route::post("/control-panel/point/insert_point", "ControlPanelController@insert_point");