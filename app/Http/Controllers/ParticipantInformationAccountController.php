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
        session()->put('lastNameFirstName', $datas['lastNameFirstName']);
        if(isset($datas['Appli']['Id'])){
        session()->put('applicantId', $datas['Appli']['Id']);
        }
        session()->put('Contact__c', $datas['Appli']['Contact__c']);
        session()->put('Google_Drive_Folder__c', isset($datas['Appli']['Google_Drive_Folder__c'])?$datas['Appli']['Google_Drive_Folder__c']:'');
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
        echo "<pre>";
        unset($finalReq['_token']);
       
        // $validatedData = $request->validate([
        //     'name_of_university' => 'required',
        // ]);

      //  print_r($finalReq);
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
       $finalReq['applicant']['id']=session()->get('applicantId');
       if(session()->get('Google_Drive_Folder__c')!=''){
       $finalReq['applicant']['Google_Drive_Folder__c']=session()->get('Google_Drive_Folder__c');
       }
       $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
    
       
      
       $unique_Folder_Id;
       if(session()->get('Google_Drive_Folder__c')==''){
      $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('registration');
        $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, 'Registration '.session()->get('lastNameFirstName'));
        $finalReq['applicant']['Google_Drive_Folder__c']=$unique_Folder_Id;
    }else{
        $unique_Folder_Id= session()->get('Google_Drive_Folder__c');
    }
    
    if($passportMimeType!='NoFile'){ 
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Passport', $passportMimeType, $passport);
    }
  if($resumeMimeType!='NoFile'){
        
    'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_Resume', $resumeMimeType, $resume );
    }
    if($statusVerificationMimeType!='NoFile'){
        
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,session()->get('lastNameFirstName').'_SSV', $statusVerificationMimeType, $statusVerification);
    }
     
    $body['applicantData']=json_encode($finalReq['applicant']);
    $body['graduationDate']=json_encode($finalReq['graduationDate']);
   


       'App\Services\Helper'::postRequest($body,'APIParticipantInformationAccountClass');
       return redirect()->action('HostCompanyInformationAccountController@index', ['isSave' => 1]);
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
