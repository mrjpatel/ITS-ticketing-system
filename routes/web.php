<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('faq', 'PagesController@faq');
Route::resource('tickets','TicketController');
Route::get('createTicket', 'PagesController@createTicket');
Route::get('viewTicket', 'PagesController@viewTicket');