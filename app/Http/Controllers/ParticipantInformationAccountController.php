<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ParticipantInformationAccountController extends Controller
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

        $datas='App\Services\Helper'::getRequest('APIParticipantInformationAccountClass/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        return view('j1-visa/participant_information_account')->with(compact('datas'));
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
        unset($finalReq['_token']);

        // $validatedData = $request->validate([
        //     'name_of_university' => 'required',
        // ]);

      //  print_r($finalReq);die;
        $passport='NoFile';
        $resume='NoFile';
        $statusVerification='NoFile';
        $passportMimeType='NoFile';
        $resumeMimeType='NoFile';
        $statusVerificationMimeType='NoFile';

      if(isset($finalReq['passport'])){
        $passport = base64_encode(file_get_contents($request->file('passport')));
        $passportMimeType=$request->file('passport')->getMimeType();

      }
      if(isset($finalReq['resume'])){
         $resume = base64_encode(file_get_contents($request->file('resume')));
         $resumeMimeType=$request->file('resume')->getMimeType();
       }
       if(isset($finalReq['status_verification'])){
         $statusVerification = base64_encode(file_get_contents($request->file('status_verification')));
         $statusVerificationMimeType=$request->file('status_verification')->getMimeType();
       }
       $finalReq['applicant']['id']=$finalReq['applicantId'];
       if($finalReq['Google_Drive_Folder__c']!=''){
       $finalReq['applicant']['Google_Drive_Folder__c']=$finalReq['Google_Drive_Folder__c'];
       }
       $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];



       $unique_Folder_Id;
       if($finalReq['Google_Drive_Folder__c']==''  || 'App\Services\Helper'::isFolderExist($finalReq['Google_Drive_Folder__c'])!='200'){
      $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('registration');
        $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, 'Registration '.$finalReq['lastNameFirstName']);
        $finalReq['applicant']['Google_Drive_Folder__c']=$unique_Folder_Id;
    }else{
        $unique_Folder_Id= $finalReq['Google_Drive_Folder__c'];
    }

    if($passportMimeType!='NoFile'){
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_Passport', $passportMimeType, $passport);
    }
  if($resumeMimeType!='NoFile'){

    'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_Resume', $resumeMimeType, $resume );
    }
    if($statusVerificationMimeType!='NoFile'){

        'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_SSV', $statusVerificationMimeType, $statusVerification);
    }

    $body['applicantData']=json_encode($finalReq['applicant']);
    $body['graduationDate']=$finalReq['graduationDate'];

 //echo '<pre/>'.print_r($body);die;

       $resp='App\Services\Helper'::postRequest($body,'APIParticipantInformationAccountClass');
       if($resp=='"OK"'){
       return redirect()->action('HostCompanyInformationAccountController@index', ['isSave' => 1]);
       }else{
        'App\Services\Helper'::apiErrorReq($body,$resp,'APIParticipantInformationAccountClass');
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
