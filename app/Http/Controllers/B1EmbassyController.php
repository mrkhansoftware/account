<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B1EmbassyController extends Controller
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

$datas='App\Services\Helper'::getRequest('ApiB1EmbassyControllerAccount/'.$idCon);
$datas = json_decode($datas, true);
$datas = json_decode($datas, true);
 //echo '<pre>'; print_r($datas); die;
if(isset($datas['app']['Id'])){
session()->put('applicantId', $datas['app']['Id']);
}
if(isset($datas['app']['NewGdriveID__c'])){
session()->put('NewGdriveID__c', $datas['app']['NewGdriveID__c']);
}

if(isset($datas['app']['Google_Drive_Folder_For_B1__c'])){
session()->put('Google_Drive_Folder_For_B1__c', $datas['app']['Google_Drive_Folder_For_B1__c']);
}
if(isset($datas['app']['Program__c'])){
session()->put('Program__c', $datas['app']['Program__c']);
}
if(isset($datas['lastNameFirstName'])){
session()->put('lastNameFirstName', $datas['lastNameFirstName']);
}
if(isset($datas['contID'])){
  session()->put('Contact__c', $datas['contID']);
  }
return view('b1-program/b1_Embassy')->with(compact('datas'));


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
    $fileInfo='';
  
     /*-----FILE UPLOAD-------------*/
  
     $unique_Folder_Id='';
     if(session()->get('NewGdriveID__c')=='' || 'App\Services\Helper'::isFolderExist(session()->get('NewGdriveID__c'))!='200'){
      $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('applicant');
      $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, session()->get('lastNameFirstName'));
      $finalReq['applicant']['NewGdriveID__c']=$unique_Folder_Id;
  }else{
      $unique_Folder_Id= session()->get('NewGdriveID__c');
  }

  if(session()->get('Google_Drive_Folder_For_B1__c')==''  || 'App\Services\Helper'::isFolderExist(session()->get('Google_Drive_Folder_For_B1__c'))!='200'){
     $Google_Drive_Folder_Id=$unique_Folder_Id;
     $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id,'B Visa');
     $finalReq['applicant']['Google_Drive_Folder_For_B1__c']=$unique_Folder_Id;
 }else{
     $unique_Folder_Id= session()->get('Google_Drive_Folder_For_B1__c');
 }


   if(isset($finalReq['fileDS_160'])){
     $fileCont = base64_encode(file_get_contents($request->file('fileDS_160')));
     $fileType=$request->file('fileDS_160')->getMimeType();
         'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_DS-160 confirmation', $fileType, $fileCont);
         $fileInfo.='*DS-160 confirmation page \n';
     }
   if(isset($finalReq['fileAppointment'])){
      $fileCont = base64_encode(file_get_contents($request->file('fileAppointment')));
      $fileType=$request->file('fileAppointment')->getMimeType();
      'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Appointment confirmation', $fileType, $fileCont);
      $fileInfo.='*Appointment confirmation page \n';
    }
    if(isset($finalReq['filePictureVisa'])){
      $fileCont = base64_encode(file_get_contents($request->file('filePictureVisa')));
      $fileType=$request->file('filePictureVisa')->getMimeType();
      'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Picture of issued visa', $fileType, $fileCont);
      $fileInfo.='*Picture of the issued visa';
    }


     /*-----FILE UPLOAD----END---------*/

     $finalReq['applicant']['id']=session()->get('applicantId');
     $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
     $finalReq['applicant']['Program__c']=session()->get('Program__c');
     $finalReq['applicant']['B1VisaFileInfo__c']=$fileInfo;
     $finalReq['applicantData']=json_encode($finalReq['applicant']);
     unset($finalReq['fileDS_160']);
     unset($finalReq['fileAppointment']);
     unset($finalReq['filePictureVisa']);
     unset($finalReq['_token']);
     unset($finalReq['applicant']);
   
   
   
   
 
 //echo "<pre>"; print_r($finalReq);die;
 
   $resp= 'App\Services\Helper'::postRequest($finalReq,'ApiB1EmbassyControllerAccount');
   if($resp=='"OK"'){
 return redirect()->action('B1EmbassyController@index', ['isSave' => 1]);
   }else{
     
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiB1EmbassyControllerAccount');
   }
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
