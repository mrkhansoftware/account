<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyPlacementProgramController extends Controller
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

        $datas = 'App\Services\Helper'::getRequest('ApiAgencyPlacementRegistrationClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        session()->put('conId', isset($datas['conId'])?$datas['conId']:'');
        session()->put('accountId', isset($datas['accountId'])?$datas['accountId']:'');
        return view('agent-bookings/AgencyPlacementProgram')->with(compact('datas'));
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
        $finalReq['typeStr'] = 'savefun';
        if(isset($finalReq['fileCV'])){
            $finalReq['fileCV']= base64_encode(file_get_contents($request->file('fileCV')));
            $finalReq['fileTypeCV']=$request->file('fileCV')->getMimeType();
        }
        unset($finalReq['_token']);
       // echo '<pre/>'; print_r($finalReq); die;

        $resp = 'App\Services\Helper'::postRequest($finalReq, 'ApiAgencyPlacementRegistrationClass');
        if ($resp == '"OK"') {
            return redirect()->action('AgencyPlacementProgramController@index', ['isSave' => 1]);
        } else {
           
            'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiAgencyPlacementRegistrationClass');
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
