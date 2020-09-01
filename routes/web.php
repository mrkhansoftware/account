<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::resource('participantinformationaccount', 'ParticipantInformationAccountController');

Route::get('/user', 'UserController@index');

Route::get('/login', 'LoginController@index');
Route::get('/participant_information_account', 'ParticipantInformationAccountController@index');



