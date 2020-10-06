<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyCheckinController extends Controller
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

 $datas='App\Services\Helper'::getRequest('ApiMonthlyCheckInClass/'.$idCon);
$datas = json_decode($datas, true);
$datas = json_decode($datas, true);
//echo '<pre>'; print_r($datas); die;
session()->put('lastNameFirstName', isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:'');
if(isset($datas['ap']['Id'])){
session()->put('applicantId', $datas['ap']['Id']);
}
if(isset($datas['ap']['NewGdriveID__c'])){
session()->put('NewGdriveID__c', $datas['ap']['NewGdriveID__c']);
}

if(isset($datas['ap']['Google_Drive_Evaluation_Form__c'])){
session()->put('Google_Drive_Evaluation_Form__c', $datas['ap']['Google_Drive_Evaluation_Form__c']);
}


if(isset($datas['onfrm']['Id'])){
session()->put('onfrmId', $datas['onfrm']['Id']);
}
session()->put('Contact__c', isset($datas['contID'])?$datas['contID']:'');

return view('j1-visa/monthly_Checkin')->with(compact('datas'));


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

if(session()->get('Google_Drive_Evaluation_Form__c')==''  || 'App\Services\Helper'::isFolderExist(session()->get('Google_Drive_Evaluation_Form__c'))!='200'){
 $Google_Drive_Folder_Id=$unique_Folder_Id;
 $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id,'Evaluation');
 $finalReq['applicant']['Google_Drive_Evaluation_Form__c']=$unique_Folder_Id;
}else{
 $unique_Folder_Id= session()->get('Google_Drive_Evaluation_Form__c');
}


if(isset($finalReq['fileIn1'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn1')));
$fileType=$request->file('fileIn1')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_monthlyCheckin_1', $fileType, $fileCont);
}
if(isset($finalReq['fileIn2'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn2')));
$fileType=$request->file('fileIn2')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_monthlyCheckin_2', $fileType, $fileCont);

}
if(isset($finalReq['fileIn3'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn3')));
$fileType=$request->file('fileIn3')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_monthlyCheckin_3', $fileType, $fileCont);

}


/*-----FILE UPLOAD----END---------*/


$finalReq['applicant']['id']=session()->get('applicantId');
$finalReq['onfrm']['id']=session()->get('onfrmId');
$finalReq['applicantData']=json_encode($finalReq['applicant']);
$finalReq['onlineFormData']=json_encode($finalReq['onfrm']);
unset($finalReq['fileIn1']);
unset($finalReq['fileIn2']);
unset($finalReq['fileIn3']);
unset($finalReq['_token']);
unset($finalReq['applicant']);

unset($finalReq['onfrm']);






//echo "<pre>"; print_r($finalReq);

 $resp='App\Services\Helper'::postRequest($finalReq,'ApiMonthlyCheckInClass');
if($resp=='"OK"'){
return redirect()->action('MonthlyCheckinController@index', ['isSave' => 1]);
}else{
  echo $resp;
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
