<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as IlluminateRoute;
use App\Http\Controllers\CaseInsensitiveUriValidator;
use Illuminate\Routing\Matching\UriValidator;
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



$validators = IlluminateRoute::getValidators();
$validators[] = new CaseInsensitiveUriValidator;
IlluminateRoute::$validators = array_filter($validators, function($validator) { 
  return get_class($validator) != UriValidator::class;
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LoginController@index');



Route::resource('TermAndPolicy', 'TermAndPolicyController');
Route::get('/terms-of-service', 'TermAndPolicyController@termService');
Route::get('/privacy-policy', 'TermAndPolicyController@privacyPolicy');


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



Route::resource('ScheduleCallJvisa', 'ScheduleCallController');
Route::get('/ScheduleCallJvisa', 'ScheduleCallController@index');

Route::get('/ScheduleCall', 'ScheduleCallController@index');


Route::get('/ScheduleCallBVisa', 'ScheduleCallController@index');

Route::get('/scheduleCallJVisaSupervisor', 'ScheduleCallController@index');


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

Route::resource('WeeklyCheckin', 'WeeklyCheckinController');
Route::get('/weekly_Checkin', 'WeeklyCheckinController@index');


Route::resource('MidpointEvaluationAccount', 'MidpointEvaluationAccountController');
Route::get('/midpoint_evaluation_account', 'MidpointEvaluationAccountController@index');


Route::resource('FinalEvaluationAccount', 'FinalEvaluationAccountController');
Route::get('/final_evaluation_account', 'FinalEvaluationAccountController@index');


Route::resource('HostCompanyAgrmentAcc', 'HostCompanyAgrmentAccController');
Route::get('/host_company_agreement_account', 'HostCompanyAgrmentAccController@index');

Route::resource('DS7002Trainigsplan', 'DS7002TrainigsplanController');
Route::get('/DS_7002_Trainigsplan', 'DS7002TrainigsplanController@index');


Route::resource('HCMidPointEvaluation', 'HCMidPointEvaluationController');
Route::get('/HostCompany_Mid_Point_Evaluation_Account', 'HCMidPointEvaluationController@index');

Route::resource('FinalEvaluationHostCom', 'FinalEvaluationHostComController');
Route::get('/final_evaluation_hc_account', 'FinalEvaluationHostComController@index');


Route::resource('PreDepartur', 'PreDepartureController');
Route::get('/preDepartureOrientationConfirmationPage', 'PreDepartureController@index');




Route::resource('VideoTutorials', 'VideoTutorialsController');
Route::get('/VideoTutorials', 'VideoTutorialsController@index');


Route::resource('UploadYourDocuments', 'UploadYourDocumentsController');
Route::get('/uploadyourdocuments', 'UploadYourDocumentsController@index');



Route::resource('dosAndDonts', 'DoAndDontsController');
Route::get('/dosAndDonts', 'DoAndDontsController@index');






Route::resource('ApplicantResume', 'ApplicantResumeController');
Route::get('/ApplicantResume', 'ApplicantResumeController@index');
Route::get('/ApplicantPDFWithVideo', 'ApplicantResumeController@resumeDetails');


Route::resource('WriteYourScript', 'WriteYourScriptController');
Route::get('/WriteYourScript', 'WriteYourScriptController@index');



Route::resource('VideoInstructions', 'VideoInstructionsController');
Route::get('/VideoInstructions', 'VideoInstructionsController@index');



Route::resource('VideoResume', 'VideoResumeController');
Route::get('/Video_Resume', 'VideoResumeController@index');



Route::resource('InterviewPreparation', 'InterviewPreparationController');
Route::get('/InterviewPreparation', 'InterviewPreparationController@index');



Route::resource('BVisaCaseInformation', 'BVisaCaseInformationController');
Route::get('/B_Visa_Case_Information', 'BVisaCaseInformationController@index');



Route::resource('b1Video', 'B1VideoController');
Route::get('/b1Video', 'B1VideoController@index');



Route::resource('B1Embassy', 'B1EmbassyController');
Route::get('/b1_Embassy', 'B1EmbassyController@index');





Route::resource('simCard', 'simCardController');
Route::get('/simCard', 'simCardController@index');



Route::resource('WebcamInterview', 'WebcamInterviewController');
Route::get('/WebcamInterviewQuestionnaire', 'WebcamInterviewController@index');


Route::resource('SupervisorInterview', 'SupervisorInterviewController');
Route::get('/SupervisorPhoneInterview', 'SupervisorInterviewController@index');


Route::resource('VisitorProgramQuiz', 'VisitorProgramQuizController');
Route::get('/TheExchangeVisitorProgramQuiz', 'VisitorProgramQuizController@index');



Route::resource('HCSiteVisitForm', 'HCSiteVisitFormController');
Route::get('/HostCompanySiteVisitForm', 'HCSiteVisitFormController@index');


Route::resource('QuestionerBVisa', 'QuestionerBVisaController');
Route::get('/QuestionerBVisaService', 'QuestionerBVisaController@index');

Route::resource('QuestionerPlacement', 'QuestionerPlacementController');
Route::get('/QuestionerPlacementService', 'QuestionerPlacementController@index');


Route::resource('AgencyInformation', 'AgencyInformationController');
Route::get('/AgencyInformation', 'AgencyInformationController@index');


Route::resource('AgencyBvisaBooking', 'AgencyBvisaBookingController');
Route::get('/AgencyBvisaBooking', 'AgencyBvisaBookingController@index');


Route::get('/existing_customer_list_b_visa', 'AgencyBvisaBookingController@existingCustomerList');
Route::get('/customer_information_b_visa', 'AgencyBvisaBookingController@existingCustomerInfo');


Route::resource('AgencyPlacementProgram', 'AgencyPlacementProgramController');
Route::get('/AgencyPlacementProgramRegistrationForm', 'AgencyPlacementProgramController@index');


Route::resource('HostCompanyAgreementAgent', 'HostCompanyAgreementAgentController');
Route::get('/host_company_agreement_agent', 'HostCompanyAgreementAgentController@index');


Route::resource('DS7002TrainigsplanAgent', 'DS7002TrainigsplanAgentController');
Route::get('/DS_7002_Trainigsplan_agent', 'DS7002TrainigsplanAgentController@index');

Route::resource('JVisaParticipantInfo', 'JVisaParticipantInfoController');
Route::get('/JVisaParticipantInfo', 'JVisaParticipantInfoController@index');


Route::resource('AddNewParticipant', 'AddNewParticipantController');
Route::get('/Add_New_Participant', 'AddNewParticipantController@index');

Route::get('/existing_customer_list', 'AddNewParticipantController@existingCustomerList'); 

Route::get('/customer_information', 'AddNewParticipantController@existingCustomerInfo');
Route::post('/ApplicantPDFWithVideo', 'ApplicantResumeController@resumeDetailsPassword');





 Route::resource('AgentParticipants', 'AgentParticipantsController');
 Route::get('/AgentParticipants', 'AgentParticipantsController@index');


 Route::post('/agentParticipantsList', 'AgentParticipantsController@store');


 

 Route::resource('SimcardManage', 'SimcardManageController');
 Route::get('/simcardmanagepage', 'SimcardManageController@index');

 Route::post('/common_api_simcardmanage', 'SimcardManageController@commonMethodSimcardManage');

 Route::get('/cronjob', 'CronJobController@index');
 



Route::get('/user', 'UserController@index');

Route::get('/AgencyJobSearch', 'AgencyJobSearchController@index');
Route::get('/AgencyJobSearchDetail', 'AgencyJobSearchController@detail');
Route::get('/login_account', 'LoginController@index');
Route::post('/ajax_after_login', 'LoginController@ajaxAfterLogin');
Route::post('/b1videoUpdate', 'B1VideoController@ajaxQuestionSubmit');
Route::post('/b1VideScriptReady', 'VideoResumeController@scriptreadySubmit');  
Route::post('/writeScriptPlacement', 'WriteYourScriptController@writeScriptPlacementMethod'); 
Route::post('/applicantResumePlacement', 'ApplicantResumeController@ajaxApplicantResume'); 
Route::post('/applicantResumePlacementAttachment', 'ApplicantResumeController@ajaxApplicantResumeAttachment'); 
Route::post('/scheduleCallBooking', 'ScheduleCallController@ajaxscheduleCall'); 
Route::post('/applicantResumeAjax', 'ApplicantResumeController@applicantResumeAjaxCall'); 
Route::get('/resetPassword', 'LoginController@resetPassword');


Route::get('/profile_account', 'ProfileController@index');

Route::resource('profileInformation', 'ProfileController');

Route::get('/password_account', 'ChangePasswordController@index');

Route::resource('changePassword', 'ChangePasswordController');

Route::get('/close_account', 'CloseAccountController@index');
Route::resource('closeAccount', 'CloseAccountController');

Route::get('/logout_account', 'LogoutController@index');
Route::resource('LogoutAccount', 'LogoutController');



