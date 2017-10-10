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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('cors')->get('tickets','TicketAPIController@fetch');

// List
Route::get('tickets/list','TicketAPIController@index');

// Show
Route::get('tickets/{id}', 'TicketAPIController@show');

// Store
Route::post('tickets', 'TicketAPIController@store');

// Update
Route::post('tickets/{id}/update', 'TicketAPIController@update');

// Delete
Route::get('tickets/{id}/delete', 'TicketAPIController@destroy');

//Route::middleware('cors')->get('comments','CommentAPIController@fetch');
// List
Route::get('comments/list','CommentAPIController@index');

// Show
Route::get('comments/{id}', 'CommentAPIController@show');

// Store
Route::post('comments', 'CommentAPIController@store');

// Update
Route::post('comments/{id}/update', 'CommentAPIController@update');

// Delete
Route::get('comments/{id}/delete', 'CommentAPIController@destroy');