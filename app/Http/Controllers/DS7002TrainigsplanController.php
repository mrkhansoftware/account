<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DS7002TrainigsplanController extends Controller
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
        $datas = 'App\Services\Helper'::getRequest('ApiDS7002Controller/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die; 


        return view('host-company/DS_7002_Trainigsplan')->with(compact('datas'));
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
        $EncId = $finalReq['EncId'];
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['onForm']['id'] = $finalReq['onfrmId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        $finalReq['onlineFormData'] = json_encode($finalReq['onForm']);
        $finalReq['DSPhaseData'] = json_encode($finalReq['DSPhaseListwrap']);

        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onForm']);
        unset($finalReq['EncId']);
        unset($finalReq['DSPhaseListwrap']);
        unset($finalReq['EncId']);
        unset($finalReq['applicantId']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['Contact__c']);
        unset($finalReq['NewGdriveID__c']);
        unset($finalReq['HostCompany_Gdrive_Folder_Id__c']);   
        unset($finalReq['onfrmId']);   

        //echo '<pre>'; print_r($finalReq);

        $resp='App\Services\Helper'::postRequest($finalReq, 'ApiDS7002Controller');
        //die;
if($resp=='"OK"'){
    $finalReqLog['requestData']=json_encode($finalReq);
    $finalReqLog['requestError']=$resp;
    $finalReqLog['requestClass']='ApiDS7002Controller--->successCase';
    'App\Services\Helper'::postRequest($finalReqLog,'ApiErrorEmailClass'); 


        return redirect()->action('DS7002TrainigsplanController@index', ['isSave' => 1, 'orgid' => $EncId]);
}else{
   
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiDS7002Controller');
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
