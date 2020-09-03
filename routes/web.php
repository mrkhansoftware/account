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
Route::resource('participantInformationAccount', 'ParticipantInformationAccountController');

Route::get('/user', 'UserController@index');

Route::get('/login_account', 'LoginController@index');
Route::post('/ajax_after_login', 'LoginController@ajaxAfterLogin');

Route::get('/participant_information_account', 'ParticipantInformationAccountController@index');

Route::get('/profile_account', 'ProfileController@index');

Route::resource('profileInformation', 'ProfileController');

Route::get('/change_password', 'ChangePasswordController@index');

Route::resource('changePassword', 'ChangePasswordController');

Route::get('/close_account', 'CloseAccountController@index');
Route::resource('closeAccount', 'CloseAccountController');



