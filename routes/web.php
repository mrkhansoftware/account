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


Route::resource('J1ReviewApplicationAccount', 'J1ReviewApplicationAccountController');
Route::get('/j1_review_your_application_account', 'J1ReviewApplicationAccountController@index');

Route::resource('ParticipantHandbookAccount', 'ParticipantHandbookAccountController');
Route::get('/participant_handbook_account', 'ParticipantHandbookAccountController@index');



Route::resource('ScheduleCallJvisa', 'ScheduleCallJvisaController');
Route::get('/ScheduleCallJvisa', 'ScheduleCallJvisaController@index');



Route::resource('AdditionalDocumentJ1', 'AdditionalDocumentJ1Controller');
Route::get('/AdditionalDocumentJ1', 'AdditionalDocumentJ1Controller@index');



Route::resource('ExtensionRequestAccount', 'ExtensionRequestAccountController');
Route::get('/extension_request_account', 'ExtensionRequestAccountController@index');


Route::resource('TravelValidationAccount', 'TravelValidationAccountController');
Route::get('/travel_validation_account', 'TravelValidationAccountController@index');


Route::resource('ValidationCheckinAccount', 'ValidationCheckinAccountController');
Route::get('/validation_checkin_account', 'ValidationCheckinAccountController@index');


Route::resource('MonthlyCheckin', 'MonthlyCheckinController');
Route::get('/monthly_Checkin', 'MonthlyCheckinController@index');


Route::resource('MidpointEvaluationAccount', 'MidpointEvaluationAccountController');
Route::get('/midpoint_evaluation_account', 'MidpointEvaluationAccountController@index');


Route::resource('FinalEvaluationAccount', 'FinalEvaluationAccountController');
Route::get('/final_evaluation_account', 'FinalEvaluationAccountController@index');












Route::get('/user', 'UserController@index');

Route::get('/login_account', 'LoginController@index');
Route::post('/ajax_after_login', 'LoginController@ajaxAfterLogin');



Route::get('/profile_account', 'ProfileController@index');

Route::resource('profileInformation', 'ProfileController');

Route::get('/password_account', 'ChangePasswordController@index');

Route::resource('changePassword', 'ChangePasswordController');

Route::get('/close_account', 'CloseAccountController@index');
Route::resource('closeAccount', 'CloseAccountController');



