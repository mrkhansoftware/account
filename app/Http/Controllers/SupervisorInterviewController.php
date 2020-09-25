<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorInterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_GET['orgid'])) {
           
            return 'App\Services\Helper'::returnUrl();
        
    } else {
        $idCon = 'isOrganizationLink' . $_GET['orgid'];
    }
    $datas = 'App\Services\Helper'::getRequest('ApiSupervisorPhoneInterview/' . $idCon);
    $datas = json_decode($datas, true);
    $datas = json_decode($datas, true);
   // echo '<pre>'; print_r($datas); die;
    return view('others/SupervisorPhoneInterview')->with(compact('datas'));
  
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
        $EncId=$finalReq['app']['Encrypted_Host_Company_Id__c'];
        $finalReq['applicantData'] = json_encode($finalReq['app']);
        $finalReq['onlineFormData'] = json_encode($finalReq['onfrm']);

        unset($finalReq['_token']);
        unset($finalReq['app']);
        unset($finalReq['onfrm']);
        //echo '<pre>'; print_r($finalReq);die;

        $response='App\Services\Helper'::postRequest($finalReq, 'ApiSupervisorPhoneInterview');
        if($response=='"OK"'){
        return redirect()->action('SupervisorInterviewController@index', ['isSave' => 1, 'orgid' => $EncId]);
        }else{
            echo $response;die;
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
