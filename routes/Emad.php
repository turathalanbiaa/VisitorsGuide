<?php
/**
 * Created by PhpStorm.
 * User: Emad
 * Date: 7/31/2018
 * Time: 9:45 AM
 */

Route::get('/road-guide', "PointController@main");
Route::post('/road-guide/street-view', "PointController@streetView");