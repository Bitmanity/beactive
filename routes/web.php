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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/add_client', function () {
    return view('pages.add_client');
})->name('add_client');

Route::get('/appointments', function () {
    return view('pages.appointments');
})->name('appointments');

Route::get('/client_details', function () {
    return view('pages.client_details');
})->name('client_details');

Route::get('/view_client', function () {
    return view('pages.view_client');
})->name('view_client');

