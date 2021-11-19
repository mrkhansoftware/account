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


        return view('host-company/host_company_agreement_account')->with(compact('datas'));
    }

    public function indexWorkCompensation()
    {
        if (!isset($_GET['orgid'])) {
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            $idCon = 'isOrganizationLink' . $_GET['orgid'];
        }

        $datas = 'App\Services\Helper'::getRequest('ApiUploadWorkerCompensation/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);

        // echo '<pre>'; print_r($datas); die;


        return view('host-company/Workers_Compensation_Certificate')->with(compact('datas'));
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
        if ($finalReq['NewGdriveID__c'] == '' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c']) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('applicant');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
            $finalReq['applicant']['NewGdriveID__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['NewGdriveID__c'];
        }

        if ($finalReq['HostCompany_Gdrive_Folder_Id__c'] != ''  && 'App\Services\Helper'::isFolderExist($finalReq['HostCompany_Gdrive_Folder_Id__c']) == '200') {
            $unique_Folder_Id = $finalReq['HostCompany_Gdrive_Folder_Id__c'];
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
        unset($finalReq['onfrmId']);
        // echo '<pre>'; print_r($finalReq);die;


        $resp='App\Services\Helper'::postRequest($finalReq, 'ApiHostCompanyAgreementController');
        if ($resp=='"OK"') {
      /*      $finalReqLog['requestData']=json_encode($finalReq);
            $finalReqLog['requestError']=$resp;
            $finalReqLog['requestClass']='ApiHostCompanyAgreementController--->successCase';
            'App\Services\Helper'::postRequest($finalReqLog, 'ApiErrorEmailClass');
*/


            return redirect()->action('HostCompanyAgrmentAccController@index', ['isSave' => 1, 'orgid' => $EncId]);
        } else {
            'App\Services\Helper'::apiErrorReq($finalReq, $resp, 'ApiHostCompanyAgreementController');
        }
    }

    public function work(Request $request)
    {
        $finalReq = $request->all();
        /*------------------file upload ------*/
        if(empty($finalReq)) {
          return redirect()->action('HostCompanyAgrmentAccController@indexWorkCompensation', [ 'orgid' => $EncId]);
          
        }
        $unique_Folder_Id;
        if ($finalReq['NewGdriveID__c'] == '' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c']) != '200') {
            $Google_Drive_Folder_Id = 'App\Services\Helper'::returnFolderId('applicant');
            $unique_Folder_Id = 'App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
            $finalReq['applicant']['NewGdriveID__c'] = $unique_Folder_Id;
        } else {
            $unique_Folder_Id = $finalReq['NewGdriveID__c'];
        }

        if ($finalReq['HostCompany_Gdrive_Folder_Id__c'] != ''  && 'App\Services\Helper'::isFolderExist($finalReq['HostCompany_Gdrive_Folder_Id__c']) == '200') {
            $unique_Folder_Id = $finalReq['HostCompany_Gdrive_Folder_Id__c'];
        }
        if (isset($finalReq['fileCertificate'])) {
            $fileCont = base64_encode(file_get_contents($request->file('fileCertificate')));
            $fileType = $request->file('fileCertificate')->getMimeType();
            $finalReq['applicant']['Workers_Comp__c'] =   'App\Services\Helper'::fileUpload($unique_Folder_Id, $finalReq['lastNameFirstName'] . '_Compensation_Certificate', $fileType, $fileCont);
        }
        /*----------------------------------*/







        $EncId = $finalReq['EncId'];
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        $finalReq['onlineFormData'] = '';

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
        unset($finalReq['onfrmId']);
        // echo '<pre>'; print_r($finalReq);die;


        $resp='App\Services\Helper'::postRequest($finalReq, 'ApiUploadWorkerCompensation');
        if ($resp=='"OK"') {

            return redirect()->action('HostCompanyAgrmentAccController@indexWorkCompensation', ['isSent' => 1, 'orgid' => $EncId]);
        } else {
            'App\Services\Helper'::apiErrorReq($finalReq, $resp, 'Workers_Compensation_Certificate');
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
