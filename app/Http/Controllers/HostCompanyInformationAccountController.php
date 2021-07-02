<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostCompanyInformationAccountController extends Controller
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

        $datas = 'App\Services\Helper'::getRequest('ApiHostCompanyInformationController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        return view('j1-visa/host_company_information_account')->with(compact('datas'));
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
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
//        echo '<pre>';print_r($finalReq);die;
        $resp='App\Services\Helper'::postRequest($finalReq, 'ApiHostCompanyInformationController');
        if($resp=='"OK"'){
        return redirect()->action('ParticipantAgreementAccountController@index', ['isSave' => 1]);
        }else{
        
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiHostCompanyInformationController');
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
