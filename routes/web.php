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

Route::get('/','PagesController@home')->name('home');
Route::get('home', 'PagesController@home')->name('home');

Route::get('faq', 'PagesController@faq')->name('faq');

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::resource('tickets','TicketController');
    Route::get('createTicket', 'PagesController@createTicket')->name('createTicket');
});




