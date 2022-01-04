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
 if($finalReq['NewGdriveID__c']=='' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c'])!='200'){
  $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('applicant');
  $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
  $finalReq['applicant']['NewGdriveID__c']=$unique_Folder_Id;
}else{
  $unique_Folder_Id= $finalReq['NewGdriveID__c'];
}

if($finalReq['Google_Drive_Evaluation_Form__c']==''  || 'App\Services\Helper'::isFolderExist($finalReq['Google_Drive_Evaluation_Form__c'])!='200'){
 $Google_Drive_Folder_Id=$unique_Folder_Id;
 $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id,'Evaluation');
 $finalReq['applicant']['Google_Drive_Evaluation_Form__c']=$unique_Folder_Id;
}else{
 $unique_Folder_Id= $finalReq['Google_Drive_Evaluation_Form__c'];
}


if(isset($finalReq['fileIn1'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn1')));
$fileType=$request->file('fileIn1')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_monthlyCheckin_1', $fileType, $fileCont);
}
if(isset($finalReq['fileIn2'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn2')));
$fileType=$request->file('fileIn2')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_monthlyCheckin_2', $fileType, $fileCont);

}
if(isset($finalReq['fileIn3'])){
$fileCont = base64_encode(file_get_contents($request->file('fileIn3')));
$fileType=$request->file('fileIn3')->getMimeType();
'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_monthlyCheckin_3', $fileType, $fileCont);

}


/*-----FILE UPLOAD----END---------*/


$finalReq['applicant']['id']=$finalReq['applicantId'];
$finalReq['onfrm']['id']=$finalReq['onfrmId'];
$finalReq['applicantData']=json_encode($finalReq['applicant']);
$finalReq['onlineFormData']=json_encode($finalReq['onfrm']);
unset($finalReq['fileIn1']);
unset($finalReq['fileIn2']);
unset($finalReq['fileIn3']);
unset($finalReq['_token']);
unset($finalReq['applicant']);
unset($finalReq['onfrm']);

unset($finalReq['lastNameFirstName']);
unset($finalReq['applicantId']);
unset($finalReq['NewGdriveID__c']);
unset($finalReq['Google_Drive_Evaluation_Form__c']);
unset($finalReq['onfrmId']);
unset($finalReq['Contact__c']);






//echo "<pre>"; print_r($finalReq);

 $resp='App\Services\Helper'::postRequest($finalReq,'ApiMonthlyCheckInClass');
if($resp=='"OK"'){
return redirect()->action('MonthlyCheckinController@index', ['isSave' => 1]);
}else{

  'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiMonthlyCheckInClass');
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
