<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 9/9/2018
 * Time: 9:00 AM
 */

Route::get('/control-panel/majales', "ControlPanelController@managementMajales");
Route::post('/control-panel/majales/active', "ControlPanelController@activeMajles");
Route::post('/control-panel/majales/reject', "ControlPanelController@rejectMajles");
Route::post('/control-panel/majales/delete', "ControlPanelController@deleteMajles");