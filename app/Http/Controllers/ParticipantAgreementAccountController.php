<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantAgreementAccountController extends Controller
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
        $datas='App\Services\Helper'::getRequest('ApiParticipantAgreementAccountClass/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //print_r($datas);
        session()->put('lastNameFirstName', $datas['lastNameFirstName']);
        if(isset($datas['Appli']['Id'])){
        session()->put('applicantId', $datas['Appli']['Id']);
        }
        session()->put('Contact__c', $datas['Appli']['Contact__c']);
        return view('j1-visa/participant_agreement_account')->with(compact('datas'));
        

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
        $finalReq['applicant']['id']=session()->get('applicantId');
        $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        unset($finalReq['applicant']);
       
       
        'App\Services\Helper'::postRequest($finalReq,'ApiParticipantAgreementAccountClass');
        return redirect()->action('FinalizeApplicationAccountController@index', ['isSave' => 1]);
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
