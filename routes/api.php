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

//route for the middleware cors
Route::middleware('cors')->get('tickets','TicketAPIController@fetch');

// CRUD API for the tickets
Route::get('tickets/list','TicketAPIController@index'); // List
Route::get('tickets/{id}', 'TicketAPIController@show'); // Show
Route::post('tickets', 'TicketAPIController@store'); // Store
Route::post('tickets/{id}/update', 'TicketAPIController@update'); // Update
Route::get('tickets/{id}/delete', 'TicketAPIController@destroy'); // Delete

//CRUD API for the comments
Route::get('comments/list','CommentAPIController@index'); // List
Route::get('comments/{id}', 'CommentAPIController@show'); // Show
Route::post('comments', 'CommentAPIController@store'); // Store
Route::post('comments/{id}/update', 'CommentAPIController@update'); // Update
Route::get('comments/{id}/delete', 'CommentAPIController@destroy'); // Delete