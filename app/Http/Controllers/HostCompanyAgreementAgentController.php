<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostCompanyAgreementAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (!isset($_GET['orgid'])) {
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            $idCon = 'isOrganizationLink' . $_GET['orgid'];
        }

        $datas = 'App\Services\Helper'::getRequest('ApiHostCompanyAgreementAgentController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);

        // echo '<pre>';
        // print_r($datas);
        // die;

        return view('agent-bookings/host_company_agreement_agent')->with(compact('datas'));
        //return view('agent-bookings/host_company_agreement_agent');

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
        /*------------------file upload ------*/

        $unique_Folder_Id='';
      
        $unique_Folder_Id='';
        if ($finalReq['Google_Drive_Folder__c'] == ''  || 'App\Services\Helper'::isFolderExist($finalReq['Google_Drive_Folder__c']) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('registration');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, 'Registration ' . $finalReq['lastNameFirstName']);
            $finalReq['applicant']['Google_Drive_Folder__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['Google_Drive_Folder__c'];
        }
        if (isset($finalReq['fileCertificate'])) {
            $fileCont = base64_encode(file_get_contents($request->file('fileCertificate')));
            $fileType = $request->file('fileCertificate')->getMimeType();
            $finalReq['applicant']['Workers_Comp__c'] =   'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_Compensation_Certificate', $fileType, $fileCont);
        }
        /*----------------------------------*/







        $EncId = $finalReq['EncId'];
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['onfrm']['id'] = $finalReq['onfrmId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        $finalReq['onlineFormData'] = json_encode($finalReq['onfrm']);
        if (isset($finalReq['options'])) {
            $finalReq['perform_task'] = implode(";", $finalReq['options']);
        }
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onfrm']);
        unset($finalReq['options']);
        unset($finalReq['fileCertificate']);
        unset($finalReq['EncId']);
        unset($finalReq['applicantId']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['Contact__c']);
        unset($finalReq['NewGdriveID__c']);
        unset($finalReq['HostCompany_Gdrive_Folder_Id__c']);  
        unset($finalReq['Google_Drive_Folder__c']);   
        unset($finalReq['onfrmId']);   
      

      $resp=  'App\Services\Helper'::postRequest($finalReq, 'ApiHostCompanyAgreementAgentController');
   if($resp=='"OK"'){
        return redirect()->action('HostCompanyAgreementAgentController@index', ['isSave' => 1, 'orgid' => $EncId]);
   }else{
       
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiHostCompanyAgreementAgentController');
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
