<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B1VideoController extends Controller
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
  
          $datas='App\Services\Helper'::getRequest('ApiBvisaController/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
          //echo '<pre>'; print_r($datas); die;
          if(isset($datas['app']['Id'])){
          session()->put('applicantId', $datas['app']['Id']);
          }
          session()->put('Contact__c', $datas['contID']);
         return view('b1-program/b1Video')->with(compact('datas'));

        
    }

    public function ajaxQuestionSubmit(Request $request)
    {
    $finalReq = $request->all();
    
    $finalReq['applicant']['id']=session()->get('applicantId');
    $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
    $finalReq['applicantData']=json_encode($finalReq['applicant']);
    unset($finalReq['_token']);
    unset($finalReq['applicant']);
  
  
  
  

//echo "<pre>"; print_r($finalReq);die;

return  'App\Services\Helper'::postRequest($finalReq,'ApiBvisaController');

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
