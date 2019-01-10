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

Route::post('client','ClientController@form')->name('client');

Route::get('list','ClientController@list')->name('client_list');
Route::get('/client_detail/{id}','ClientController@show')->name('client_detail');

Route::get('/add_client', function () {
    return view('pages.add_client');
})->name('add_client');

Route::get('/appointments', function () {
    return view('pages.appointments');
})->name('appointments');


Route::get('/view_client', function () {
    return view('pages.view_client');
})->name('view_client');


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
