<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalDocumentJ1Controller extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{

$idCon= 'App\Services\Helper'::sessionConId();
if($idCon==''){
return 'App\Services\Helper'::returnUrl();
}

$datas='App\Services\Helper'::getRequest('ApiAdditionalDocumentJ1Controller/'.$idCon);
$datas = json_decode($datas, true);
$datas = json_decode($datas, true);
session()->put('lastNameFirstName', $datas['lastNameFirstName']);
if(isset($datas['ap']['Id'])){
session()->put('applicantId', $datas['ap']['Id']);
}
if(isset($datas['ap']['NewGdriveID__c'])){
session()->put('NewGdriveID__c', $datas['ap']['NewGdriveID__c']);
}
if(isset($datas['ap']['J_Visa_Applicant_Folder_Id__c'])){
session()->put('J_Visa_Applicant_Folder_Id__c', $datas['ap']['J_Visa_Applicant_Folder_Id__c']);
}
if(isset($datas['ap']['Google_Drive_Folder_Additional_Doc__c'])){
session()->put('Google_Drive_Folder_Additional_Doc__c', $datas['ap']['Google_Drive_Folder_Additional_Doc__c']);
}


return view('j1-visa/AdditionalDocumentJ1')->with(compact('datas'));

}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
//
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $finalReq = $request->all();
     
     
    /*-----FILE UPLOAD-------------*/
 
    $unique_Folder_Id;
    if(session()->get('NewGdriveID__c')=='' || 'App\Services\Helper'::isFolderExist(session()->get('NewGdriveID__c'))!='200'){
     $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('applicant');
     $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, session()->get('lastNameFirstName'));
     $finalReq['applicant']['NewGdriveID__c']=$unique_Folder_Id;
 }else{
  
     $unique_Folder_Id= session()->get('NewGdriveID__c');
 }

 if(session()->get('J_Visa_Applicant_Folder_Id__c')!=''  && 'App\Services\Helper'::isFolderExist(session()->get('J_Visa_Applicant_Folder_Id__c'))=='200'){
   
    $unique_Folder_Id= session()->get('J_Visa_Applicant_Folder_Id__c');
}

if(session()->get('Google_Drive_Folder_Additional_Doc__c')==''  || 'App\Services\Helper'::isFolderExist(session()->get('Google_Drive_Folder_Additional_Doc__c'))!='200'){
    $Google_Drive_Folder_Id=$unique_Folder_Id;
    $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id,'Additional Documents');
    $finalReq['applicant']['Google_Drive_Folder_Additional_Doc__c']=$unique_Folder_Id;
  
}else{
   echo $unique_Folder_Id= session()->get('Google_Drive_Folder_Additional_Doc__c');
}


  if(isset($finalReq['fileInsurance'])){
    $fileCont = base64_encode(file_get_contents($request->file('fileInsurance')));
    $fileType=$request->file('fileInsurance')->getMimeType();
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Insurance', $fileType, $fileCont);
  }
  if(isset($finalReq['fileFSS'])){
     $fileCont = base64_encode(file_get_contents($request->file('fileFSS')));
     $fileType=$request->file('fileFSS')->getMimeType();
     'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_FSS', $fileType, $fileCont);
 
   }
   if(isset($finalReq['fileReferenceLetter'])){
     $fileCont = base64_encode(file_get_contents($request->file('fileReferenceLetter')));
     $fileType=$request->file('fileReferenceLetter')->getMimeType();
     'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_ReferenceLetter', $fileType, $fileCont);
 
   }

   if(isset($finalReq['fileMotivationLetter'])){
    $fileCont = base64_encode(file_get_contents($request->file('fileMotivationLetter')));
    $fileType=$request->file('fileMotivationLetter')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_MotivationLetter', $fileType, $fileCont);
 
  }

  if(isset($finalReq['fileRecordTranscript'])){
    $fileCont = base64_encode(file_get_contents($request->file('fileRecordTranscript')));
    $fileType=$request->file('fileRecordTranscript')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_RecordTranscript', $fileType, $fileCont);
 
  }

  
  if(isset($finalReq['fileStatusVerification'])){
    $fileCont = base64_encode(file_get_contents($request->file('fileStatusVerification')));
    $fileType=$request->file('fileStatusVerification')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_StatusVerification', $fileType, $fileCont);
 
  }

  
  if(isset($finalReq['fileGraduationVerification'])){
    $fileCont = base64_encode(file_get_contents($request->file('fileGraduationVerification')));
    $fileType=$request->file('fileGraduationVerification')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_GraduationVerification', $fileType, $fileCont);
 
  }
  
  if(isset($finalReq['filePassport'])){
    $fileCont = base64_encode(file_get_contents($request->file('filePassport')));
    $fileType=$request->file('filePassport')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Passport', $fileType, $fileCont);
 
  }

  
  if(isset($finalReq['filePreviousVisa'])){
    $fileCont = base64_encode(file_get_contents($request->file('filePreviousVisa')));
    $fileType=$request->file('filePreviousVisa')->getMimeType();
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_PreviousVisa', $fileType, $fileCont);
 
  }
    

    /*-----FILE UPLOAD----END---------*/


    $finalReq['applicant']['id']=session()->get('applicantId');
    $finalReq['applicantData']=json_encode($finalReq['applicant']);
   
    unset($finalReq['filePreviousVisa']);
    unset($finalReq['filePassport']);
    unset($finalReq['fileGraduationVerification']);
    unset($finalReq['fileStatusVerification']);
    unset($finalReq['fileRecordTranscript']);
    unset($finalReq['fileMotivationLetter']);
    unset($finalReq['fileReferenceLetter']);
    unset($finalReq['fileFSS']);
    unset($finalReq['fileInsurance']);
    unset($finalReq['_token']);
    unset($finalReq['applicant']);
   
  
  
  
  

//echo "<pre>"; print_r($finalReq);die;

   'App\Services\Helper'::postRequest($finalReq,'ApiAdditionalDocumentJ1Controller');
 
return redirect()->action('AdditionalDocumentJ1Controller@index', ['isSave' => 1]);
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
//
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
//
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
//
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
//
}
}
