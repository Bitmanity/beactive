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

Route::group(['middleware'=>'auth'],function (){
    Route::post('client','ClientController@form')->name('client');

    Route::get('list','ClientController@list')->name('client_list');
    Route::get('/client_detail/{id}','ClientController@show')->name('client_detail');
    Route::get('client_body_info/{id}','ClientBodyInfoController@show')->name('client_body_info');

    Route::get('/update_health/{id}','ClientController@update_health')->name('update_health');

    Route::post('/update_health/{id}','ClientBodyInfoController@form')->name('add_body_info');

    Route::post('add_appointment/{id}','AppointmentController@form')->name('add_appointment');

    Route::get('app_list','AppointmentController@list')->name('appointment_list');
    //Appointment Update Done Or Cancelled
    Route::get('mark_app_done/{id}','AppointmentController@mark_done')->name('mark_app_done');
    Route::get('mark_app_cancel/{id}','AppointmentController@mark_cancelled')->name('mark_app_cancel');

    //Dashboard Route
    Route::get('dashboard','DashboardController@data')->name('dashboard');

    Route::get('/add_client', function () {
        return view('pages.add_client');
    })->name('add_client');

    Route::get('/appointments', function () {
        return view('pages.appointments');
    })->name('appointments');

    Route::get('/edit_client_details/{id}','ClientController@edit')->name('edit_client_details');


    Route::get('/view_client', function () {
        return view('pages.view_client');
    })->name('view_client');

    Route::get('/health_update', function () {
        return view('pages.health_update');
    })->name('health_update');

});


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
