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
    return view('layouts.front.static');
});

Route::middleware('guest.candidate')->get('candidate', 'Front\Candidate\Account\LoginController@index');
Route::middleware('guest.candidate')->post('candidate/login', 'Front\Candidate\Account\LoginController@login');
//Candidate account registration
Route::middleware('guest.candidate')->get('candidate/account', 'Front\Candidate\Account\RegistrationController@index');
Route::middleware('guest.candidate')->post('candidate/account/store', 'Front\Candidate\Account\RegistrationController@store');
