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