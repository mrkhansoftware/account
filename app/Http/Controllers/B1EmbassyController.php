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

     $datas='App\Services\Helper'::getRequest('ApiB1EmbassyControllerAccount/'.$finalReq['Contact__c']);
     $datas = json_decode($datas, true);
     $datas = json_decode($datas, true);

     $finalReq['lastNameFirstName']=isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:'';
     $finalReq['applicantId']=isset($datas['app']['Id'])?$datas['app']['Id']:'';
     $finalReq['NewGdriveID__c']=isset($datas['app']['NewGdriveID__c'])?$datas['app']['NewGdriveID__c']:'';
     $finalReq['Google_Drive_Folder_For_B1__c']=isset($datas['app']['Google_Drive_Folder_For_B1__c'])?$datas['app']['Google_Drive_Folder_For_B1__c']:'';
     $finalReq['Program__c']=isset($datas['app']['Program__c'])?$datas['app']['Program__c']:'';




     $unique_Folder_Id='';
     if($finalReq['NewGdriveID__c']=='' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c'] )!='200'){
      $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('applicant');
      $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
      $finalReq['applicant']['NewGdriveID__c']=$unique_Folder_Id;
  }else{
      $unique_Folder_Id= $finalReq['NewGdriveID__c'];
  }

  if($finalReq['Google_Drive_Folder_For_B1__c']==''  || 'App\Services\Helper'::isFolderExist($finalReq['Google_Drive_Folder_For_B1__c'])!='200'){
     $Google_Drive_Folder_Id=$unique_Folder_Id;
     $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id,'B Visa');
     $finalReq['applicant']['Google_Drive_Folder_For_B1__c']=$unique_Folder_Id;
 }else{
     $unique_Folder_Id= $finalReq['Google_Drive_Folder_For_B1__c'];
 }


   if(isset($finalReq['fileDS_160'])){
     $fileCont = base64_encode(file_get_contents($request->file('fileDS_160')));
     $fileType=$request->file('fileDS_160')->getMimeType();
         'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_DS-160 confirmation', $fileType, $fileCont);
         $fileInfo.='*DS-160 confirmation page \n';
     }
   if(isset($finalReq['fileAppointment'])){
      $fileCont = base64_encode(file_get_contents($request->file('fileAppointment')));
      $fileType=$request->file('fileAppointment')->getMimeType();
      'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_Appointment confirmation', $fileType, $fileCont);
      $fileInfo.='*Appointment confirmation page \n';
    }
    if(isset($finalReq['filePictureVisa'])){
      $fileCont = base64_encode(file_get_contents($request->file('filePictureVisa')));
      $fileType=$request->file('filePictureVisa')->getMimeType();
      'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_Picture of issued visa', $fileType, $fileCont);
      $fileInfo.='*Picture of the issued visa';
    }


     /*-----FILE UPLOAD----END---------*/

     $finalReq['applicant']['id']=$finalReq['applicantId'];
     $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];
     $finalReq['applicant']['Program__c']=$finalReq['Program__c'];
     $finalReq['applicant']['B1VisaFileInfo__c']=$fileInfo;
     $finalReq['applicantData']=json_encode($finalReq['applicant']);
     unset($finalReq['fileDS_160']);
     unset($finalReq['fileAppointment']);
     unset($finalReq['filePictureVisa']);
     unset($finalReq['_token']);
     unset($finalReq['applicant']);

     unset($finalReq['lastNameFirstName']);
     unset($finalReq['applicantId']);
     unset($finalReq['Contact__c']);
     unset($finalReq['NewGdriveID__c']);
     unset($finalReq['Google_Drive_Folder_For_B1__c']);
     unset($finalReq['Contact__c']);
     unset($finalReq['Program__c']);




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
