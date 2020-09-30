<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DS7002TrainigsplanAgentController extends Controller
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
        $datas = 'App\Services\Helper'::getRequest('ApiDS7200TrainingsplanAgentController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die; 

        return view('agent-bookings/DS_7002_Trainigsplan_agent')->with(compact('datas'));
        // return view('agent-bookings/DS_7002_Trainigsplan_agent');

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
        unset($finalReq['applicantId']);
        unset($finalReq['onfrmId']);
        unset($finalReq['Contact__c']);

        

$resp='App\Services\Helper'::postRequest($finalReq, 'ApiDS7200TrainingsplanAgentController');

if($resp=='"OK"'){
        return redirect()->action('DS7002TrainigsplanAgentController@index', ['isSave' => 1, 'orgid' => $EncId]);
}else{
    echo $resp;
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
