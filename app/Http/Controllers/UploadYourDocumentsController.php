<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadYourDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $idCon = 'App\Services\Helper'::sessionConId();
        if ($idCon == '') {
            return 'App\Services\Helper'::returnUrl();
        }
        $datas = 'App\Services\Helper'::getRequest('ApiUploadYourDocumentsClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
       // echo "<pre>"; print_r($datas);die;

        return view('placement-program/uploadyourdocuments')->with(compact('datas'));
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

        $finalReq=$request->all();
        $unique_Folder_Id='';
        if ($finalReq['NewGdriveID__c'] == '' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c']) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('applicant');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
            $finalReq['applicant']['NewGdriveID__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['NewGdriveID__c'];
        }

        if ($finalReq['Gdrive_Placement_Folder_Id__c'] == ''  || 'App\Services\Helper'::isFolderExist($finalReq['Gdrive_Placement_Folder_Id__c']) != '200') {
            $Google_Drive_Folder_Id = $unique_Folder_Id;
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, 'Placement');
            $finalReq['applicant']['Gdrive_Placement_Folder_Id__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['Gdrive_Placement_Folder_Id__c'];
        }
        $fileUploading = '';
        if (isset($finalReq['resume'])) {
            $fileCont = base64_encode(file_get_contents($request->file('resume')));
            $fileType = $request->file('resume')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_resume', $fileType, $fileCont);
            $fileUploading .= 'CV/Resume, ';
        }
        if (isset($finalReq['ssv'])) {
            $fileCont = base64_encode(file_get_contents($request->file('ssv')));
            $fileType = $request->file('ssv')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_Student_Status_Verification', $fileType, $fileCont);
            $fileUploading .= 'Student Status Verification, ';
        }
        if (isset($finalReq['passport'])) {
            $fileCont = base64_encode(file_get_contents($request->file('passport')));
            $fileType = $request->file('passport')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_passport', $fileType, $fileCont);
            $fileUploading .= 'Passport, ';
        }

        if (isset($finalReq['universityRequirementCrt'])) {
            $fileCont = base64_encode(file_get_contents($request->file('universityRequirementCrt')));
            $fileType = $request->file('universityRequirementCrt')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_universityRequirementCrt', $fileType, $fileCont);
            $fileUploading .= 'University Requirement file';
        }



        $finalReq['applicant']['Name_of_placement_file_uploaded__c'] = $fileUploading;
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        unset($finalReq['_token']);
        unset($finalReq['universityRequirementCrt']);
        unset($finalReq['passport']);
        unset($finalReq['ssv']);
        unset($finalReq['resume']);
        unset($finalReq['applicant']);

        unset($finalReq['applicantId']);
        unset($finalReq['NewGdriveID__c']);
        unset($finalReq['Gdrive_Placement_Folder_Id__c']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['Contact__c']);





        //echo "<pre>"; print_r($finalReq);die;
        $resp = 'App\Services\Helper'::postRequest($finalReq, 'ApiUploadYourDocumentsClass');
       // echo "<pre>"; print_r($finalReq);die;
        if ($resp == '"OK"') {
            return redirect()->action('UploadYourDocumentsController@index', ['isSave' => 1]);
        } else {

    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiUploadYourDocumentsClass');
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
