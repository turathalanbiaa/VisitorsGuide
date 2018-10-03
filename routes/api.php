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

// List single lost
//Route::get('lost/{id}', 'ArticleController@show');

// Create new lost
Route::post('lost','LostController@store');

// Update lost
//Route::put('lost', 'LostController@update');

// Delete lost
//Route::delete('lost/{id}', 'LostController@destroy');


//visitors reception
Route::get('reception','VisitorsReceptionController@index');
Route::post('reception','VisitorsReceptionController@store');
Route::put('reception', 'VisitorsReceptionController@update');
Route::delete('reception/{id}', 'VisitorsReceptionController@destroy');
Route::get('dashboard','VisitorsReceptionController@dashboard_index');

