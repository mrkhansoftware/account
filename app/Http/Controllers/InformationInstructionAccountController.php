<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationInstructionAccountController extends Controller
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

        $datas='App\Services\Helper'::getRequest('ApiInformationInstructionAccountClass/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
    return view('j1-visa/information_instruction_account')->with(compact('datas'));
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
    //  echo 'hello';

        $finalReq = $request->all();
        unset($finalReq['_token']);
    $body['applicantId']=$finalReq['applicantId'];
    $body['contactId']=$finalReq['Contact__c'];
    //print_r($body);
    $resp='App\Services\Helper'::postRequest($body,'ApiInformationInstructionAccountClass');
    if($resp=='"OK"'){
    return redirect()->action('ParticipantInformationAccountController@index', ['isSave' => 1]);
    }else{
        
'App\Services\Helper'::apiErrorReq($body,$resp,'ApiInformationInstructionAccountClass');
    }
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
