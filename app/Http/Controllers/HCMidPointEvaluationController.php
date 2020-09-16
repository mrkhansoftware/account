<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HCMidPointEvaluationController extends Controller
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
        $datas='App\Services\Helper'::getRequest('ApiMidPointHCController/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
      //  echo '<pre>'; print_r($datas); die;

       if(isset($datas['ap']['Id'])){
        session()->put('applicantId', $datas['ap']['Id']);
        }
        session()->put('Contact__c', $datas['ap']['Contact__c']);
        return view('host-company/HostCompany_Mid_Point_Evaluation_Account')->with(compact('datas'));
    
       // return view('host-company/HostCompany_Mid_Point_Evaluation_Account');

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
