<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// lost
Route::get('lost','LostController@index');



//visitors reception
Route::get('reception','VisitorsReceptionController@index');
Route::get('dashboard','VisitorsReceptionController@dashboard_index');
Route::post('reception','VisitorsReceptionController@store');
Route::put('reception', 'VisitorsReceptionController@update');
Route::delete('reception/{id}', 'VisitorsReceptionController@destroy');


