<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BVisaCaseInformationController extends Controller
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

          $datas='App\Services\Helper'::getRequest('ApiBVisaCaseInfoController/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
         // echo '<pre>'; print_r($datas); die;

         return view('b1-program/B_Visa_Case_Information')->with(compact('datas'));


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
    { $finalReq = $request->all();
       $fileInfo='';

       $datas='App\Services\Helper'::getRequest('ApiBVisaCaseInfoController/'.$finalReq['Contact__c']);
       $datas = json_decode($datas, true);
       $datas = json_decode($datas, true);

       $finalReq['lastNameFirstName']=isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:'';
       $finalReq['applicantId']=isset($datas['app']['Id'])?$datas['app']['Id']:'';
       $finalReq['NewGdriveID__c']=isset($datas['app']['NewGdriveID__c'])?$datas['app']['NewGdriveID__c']:'';
       $finalReq['Google_Drive_Folder_For_B1__c']=isset($datas['app']['Google_Drive_Folder_For_B1__c'])?$datas['app']['Google_Drive_Folder_For_B1__c']:'';
       

        /*-----FILE UPLOAD-------------*/

        $unique_Folder_Id;
        if($finalReq['NewGdriveID__c']=='' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c'])!='200'){
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


      if(isset($finalReq['EstaApp'])){
        $fileCont = base64_encode(file_get_contents($request->file('EstaApp')));
        $fileType=$request->file('EstaApp')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_ESTA_application', $fileType, $fileCont);
            $fileInfo.='*Confirmation page of your granted ESTA application\n';
        }
      if(isset($finalReq['copyPassport'])){
         $fileCont = base64_encode(file_get_contents($request->file('copyPassport')));
         $fileType=$request->file('copyPassport')->getMimeType();
         'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_copy_passport', $fileType, $fileCont);
         $fileInfo.='*Copy of your passport\n';
       }
       if(isset($finalReq['Resume'])){
         $fileCont = base64_encode(file_get_contents($request->file('Resume')));
         $fileType=$request->file('Resume')->getMimeType();
         'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_Resume', $fileType, $fileCont);
         $fileInfo.='*Your Resume/CV\n';
       }

       if(isset($finalReq['IfApp'])){
        $fileCont = base64_encode(file_get_contents($request->file('IfApp')));
        $fileType=$request->file('IfApp')->getMimeType();
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_contract_or_product', $fileType, $fileCont);
        $fileInfo.='*U.S. purchase order, material related to the contract or products\n';
      }

      if(isset($finalReq['rejection'])){
        $fileCont = base64_encode(file_get_contents($request->file('rejection')));
        $fileType=$request->file('rejection')->getMimeType();
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_rejection_letter', $fileType, $fileCont);
        $fileInfo.='*Rejection letter from U.S. embassy or deportation protocol at U.S. port of entry\n';
      }

      if(isset($finalReq['preVisas'])){
        $fileCont = base64_encode(file_get_contents($request->file('preVisas')));
        $fileType=$request->file('preVisas')->getMimeType();
        'App\Services\Helper'::fileUpload($unique_Folder_Id ,$finalReq['lastNameFirstName'].'_preVisas', $fileType, $fileCont);
        $fileInfo.='*Previous visas';
      }


        /*-----FILE UPLOAD----END---------*/

        $finalReq['applicant']['id']=$finalReq['applicantId'];
        $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];
        $finalReq['applicant']['B1VisaFileInfo__c']=$fileInfo;
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        unset($finalReq['EstaApp']);
        unset($finalReq['copyPassport']);
        unset($finalReq['Resume']);
        unset($finalReq['IfApp']);
        unset($finalReq['rejection']);
        unset($finalReq['preVisas']);
        unset($finalReq['_token']);
        unset($finalReq['applicant']);

        unset($finalReq['lastNameFirstName']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);
        unset($finalReq['NewGdriveID__c']);
        unset($finalReq['Google_Drive_Folder_For_B1__c']);
        unset($finalReq['Contact__c']);





    //echo "<pre>"; print_r($finalReq);die;

      $resp= 'App\Services\Helper'::postRequest($finalReq,'ApiBVisaCaseInfoController');
    //   die;
    if($resp=='"OK"'){
    return redirect()->action('BVisaCaseInformationController@index', ['isSave' => 1]);
    }else{

      'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiBVisaCaseInfoController');
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
