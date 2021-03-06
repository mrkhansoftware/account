<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewParticipantController extends Controller
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

        $datas = 'App\Services\Helper'::getRequest('ApiAddNewParticipantController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        session()->put('conId', isset($datas['conId'])?$datas['conId']:'');
        session()->put('accountId', isset($datas['accountId'])?$datas['accountId']:'');
        return view('agent-bookings/Add_New_Participant')->with(compact('datas'));
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
        $finalReq['conId'] = session()->get('conId');
        $finalReq['accountId'] = session()->get('accountId');
        if ($finalReq['registerationFor'] == 'ExistingCustomer') {
            $finalReq['con']['Id'] = $finalReq['existingCustomerId'];
        }
        $finalReq['typeStr'] = 'savefun';
        unset($finalReq['_token']);
        //        echo '<pre/>'; print_r($finalReq);die;

        $resp = 'App\Services\Helper'::postRequest($finalReq, 'ApiAddNewParticipantController');
        if ($resp == '"OK"') {
            return redirect()->action('AgentParticipantsController@index', ['isSave' => 1]);
        } else {
            'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiAddNewParticipantController');
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

    public function existingCustomerList()
    {
    }

    public function existingCustomerInfo(Request $request)
    {

        $finalReq = $request->all();
        $finalReq['typeStr'] = 'fillInfoOfExistingCustomer';
        //  $finalReq['wpcContent']='';

        $datas = 'App\Services\Helper'::postRequest($finalReq, 'ApiAddNewParticipantController');
        $datas = json_decode($datas, true);
        return $datas;
    }
}
