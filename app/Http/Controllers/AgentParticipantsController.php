<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentParticipantsController extends Controller
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
  
          $datas='App\Services\Helper'::getRequest('ApiAgentParticipantsController/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
          session()->put('conId', isset($datas['conId'])?$datas['conId']:'');
        session()->put('accountId', isset($datas['accountId'])?$datas['accountId']:'');
          return view('agent-bookings/AgentParticipants')->with(compact('datas'));
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
        $req=$request->all();
        $req['conId']=session()->get('conId');
        $req['accountId']=session()->get('accountId');
        $finalReq['wpcContent']=json_encode( $req);
        $datas='App\Services\Helper'::postRequest($finalReq,'ApiAgentParticipantsController');
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
           
        return $datas;
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
