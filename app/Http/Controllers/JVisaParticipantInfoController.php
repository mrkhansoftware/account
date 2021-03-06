<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JVisaParticipantInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $idCon = 'App\Services\Helper'::sessionConId();
        $participant = isset($_GET['participant']) ? $_GET['participant'] : '';
        if ($idCon == '' || $participant == '') {
            return 'App\Services\Helper'::returnUrl();
        }
        $idCon .= '_participantId_' . $participant;

        $datas = 'App\Services\Helper'::getRequest('ApiJVisaParticipantInfoClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die;
       
        return view('agent-bookings/JVisaParticipantInfo')->with(compact('datas'));
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

        $passport = 'NoFile';
        $resume = 'NoFile';
        $statusVerification = 'NoFile';
        $passportMimeType = 'NoFile';
        $resumeMimeType = 'NoFile';
        $statusVerificationMimeType = 'NoFile';

        if (isset($finalReq['passport'])) {
            $passport = base64_encode(file_get_contents($request->file('passport')));
            $passportMimeType = $request->file('passport')->getMimeType();
        }
        if (isset($finalReq['resume'])) {
            $resume = base64_encode(file_get_contents($request->file('resume')));
            $resumeMimeType = $request->file('resume')->getMimeType();
        }
        if (isset($finalReq['status_verification'])) {
            $statusVerification = base64_encode(file_get_contents($request->file('status_verification')));
            $statusVerificationMimeType = $request->file('status_verification')->getMimeType();
        }
        $finalReq['App']['id'] = $finalReq['applicantId'];
        if ($finalReq['Google_Drive_Folder__c'] != '') {
            $finalReq['App']['Google_Drive_Folder__c'] = $finalReq['Google_Drive_Folder__c'];
        }
        $finalReq['App']['Contact__c'] = $finalReq['Contact__c'];



        $unique_Folder_Id='';
        if ($finalReq['Google_Drive_Folder__c'] == ''  || 'App\Services\Helper'::isFolderExist($finalReq['Google_Drive_Folder__c']) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('registration');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, 'Registration ' . $finalReq['lastNameFirstName']);
            $finalReq['App']['Google_Drive_Folder__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['Google_Drive_Folder__c'];
        }

        if ($passportMimeType != 'NoFile') {
            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_Passport', $passportMimeType, $passport);
        }
        if ($resumeMimeType != 'NoFile') {

            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_Resume', $resumeMimeType, $resume);
        }
        if ($statusVerificationMimeType != 'NoFile') {

            'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_SSV', $statusVerificationMimeType, $statusVerification);
        }

        $finalReq['applicantData'] = json_encode($finalReq['App']);
        unset($finalReq['_token']);
        unset($finalReq['App']);
        unset($finalReq['passport']);
        unset($finalReq['resume']);
        unset($finalReq['status_verification']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);
        unset($finalReq['Google_Drive_Folder__c']);
         

        $resp = 'App\Services\Helper'::postRequest($finalReq, 'ApiJVisaParticipantInfoClass');
        if ($resp == '"OK"') {
            return redirect()->action('AgentParticipantsController@index', ['isSave' => 1]);
        } else {
           
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiJVisaParticipantInfoClass');
            die;
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
