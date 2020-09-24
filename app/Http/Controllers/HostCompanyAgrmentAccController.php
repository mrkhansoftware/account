<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostCompanyAgrmentAccController extends Controller
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

        $datas = 'App\Services\Helper'::getRequest('ApiHostCompanyAgreementController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);

        // echo '<pre>'; print_r($datas); die; 

        session()->put('lastNameFirstName', $datas['lastNameFirstName']);
        if (isset($datas['appli']['Id'])) {
            session()->put('applicantId', $datas['appli']['Id']);
        }
        if (isset($datas['appli']['NewGdriveID__c'])) {
            session()->put('NewGdriveID__c', $datas['appli']['NewGdriveID__c']);
        }

        if (isset($datas['appli']['HostCompany_Gdrive_Folder_Id__c'])) {
            session()->put('HostCompany_Gdrive_Folder_Id__c', $datas['appli']['HostCompany_Gdrive_Folder_Id__c']);
        }

        if (isset($datas['onForm']['Id'])) {
            session()->put('onfrmId', $datas['onForm']['Id']);
        }
        session()->put('Contact__c', $datas['appli']['Contact__c']);

        return view('host-company/host_company_agreement_account')->with(compact('datas'));
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

        $unique_Folder_Id;
        if (session()->get('NewGdriveID__c') == '' || 'App\Services\Helper'::isFolderExist(session()->get('NewGdriveID__c')) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('applicant');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, session()->get('lastNameFirstName'));
            $finalReq['applicant']['NewGdriveID__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = session()->get('NewGdriveID__c');
        }

        if (session()->get('HostCompany_Gdrive_Folder_Id__c') != ''  && 'App\Services\Helper'::isFolderExist(session()->get('HostCompany_Gdrive_Folder_Id__c')) == '200') {
            $unique_Folder_Id = session()->get('HostCompany_Gdrive_Folder_Id__c');
        }
        if (isset($finalReq['fileCertificate'])) {
            $fileCont = base64_encode(file_get_contents($request->file('fileCertificate')));
            $fileType = $request->file('fileCertificate')->getMimeType();
            $finalReq['applicant']['Workers_Comp__c'] =   'App\Services\Helper'::fileUpload($unique_Folder_Id, session()->get('lastNameFirstName') . '_Compensation_Certificate', $fileType, $fileCont);
        }
        /*----------------------------------*/







        $EncId = $finalReq['EncId'];
        $finalReq['applicant']['id'] = session()->get('applicantId');
        $finalReq['onfrm']['id'] = session()->get('onfrmId');
        $finalReq['applicant']['Contact__c'] = session()->get('Contact__c');
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

        // echo '<pre>'; print_r($finalReq);die;


        'App\Services\Helper'::postRequest($finalReq, 'ApiHostCompanyAgreementController');

        return redirect()->action('HostCompanyAgrmentAccController@index', ['isSave' => 1, 'orgid' => $EncId]);
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
