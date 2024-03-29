<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoAndDontsController extends Controller
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
        $datas = 'App\Services\Helper'::getRequest('ApiVideoTutorialsClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //echo '<pre>'; print_r($datas); die;

        return view('placement-program/dosAndDonts')->with(compact('datas'));

        // return view('placement-program/dosAndDonts');


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
        $finalReq['typeStr'] = 'confirmDosDonts';
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);

        unset($finalReq['_token']);
        unset($finalReq['confirm']);
        unset($finalReq['applicant']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);

        'App\Services\Helper'::postRequest($finalReq, 'ApiVideoTutorialsClass');

        return redirect()->action('DoAndDontsController@index', ['isSave' => 1]);
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
