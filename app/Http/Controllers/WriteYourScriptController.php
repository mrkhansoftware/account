<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteYourScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!isset($_GET['orgidInternal'])){
        $idCon= 'App\Services\Helper'::sessionConId();
        if($idCon==''){
           return 'App\Services\Helper'::returnUrl();
        }
        }else{
            $idCon='isInternalOrganization'.$_GET['orgidInternal'];
        }
        $datas='App\Services\Helper'::getRequest('ApiWriteYourScriptController/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //echo '<pre>'; print_r($datas); die;

        
        return view('placement-program/WriteYourScript')->with(compact('datas'));

       // return view('placement-program/WriteYourScript');

    }

    public function writeScriptPlacementMethod(Request $request)
    {
        $finalReq= $request->all();

        $finalReq['applicant']['id']=$finalReq['applicantId'];
        $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);
        $response='App\Services\Helper'::postRequest($finalReq, 'ApiWriteYourScriptController');
        if($response!='"OK"'){
            'App\Services\Helper'::apiErrorReq($finalReq,$response,'ApiWriteYourScriptController');
        }
        return  $response;

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
        //
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
