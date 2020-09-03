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
Route::get('/participant_information_account', 'ParticipantInformationAccountController@index');

Route::resource('InformationInstructionAccount', 'InformationInstructionAccountController');
Route::get('/information_instruction_account', 'InformationInstructionAccountController@index');

Route::resource('HostCompanyInformationAccount', 'HostCompanyInformationAccountController');
Route::get('/host_company_information_account', 'HostCompanyInformationAccountController@index');

Route::resource('ParticipantAgreementAccount', 'ParticipantAgreementAccountController');
Route::get('/participant_agreement_account', 'ParticipantAgreementAccountController@index');

Route::resource('FinalizeApplicationAccount', 'FinalizeApplicationAccountController');
Route::get('/finalize_application_account', 'FinalizeApplicationAccountController@index');








Route::get('/user', 'UserController@index');

Route::get('/login_account', 'LoginController@index');
Route::post('/ajax_after_login', 'LoginController@ajaxAfterLogin');



Route::get('/profile_account', 'ProfileController@index');

Route::resource('profileInformation', 'ProfileController');

Route::get('/password_account', 'ChangePasswordController@index');

Route::resource('changePassword', 'ChangePasswordController');

Route::get('/close_account', 'CloseAccountController@index');
Route::resource('closeAccount', 'CloseAccountController');



