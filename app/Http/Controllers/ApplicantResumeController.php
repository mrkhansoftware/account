<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantResumeController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(!isset($_GET['orgidInternal'])){
            session()->put('isInternal', 'No');
        $idCon= 'App\Services\Helper'::sessionConId();
        if($idCon==''){
           return 'App\Services\Helper'::returnUrl();
        }
        }else{
            session()->put('isInternal', 'Yes');
            $idCon='isInternalOrganization'.$_GET['orgidInternal'];
        }
        $datas='App\Services\Helper'::getRequest('ApiApplicantResumeController/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
       // echo '<pre>'; print_r($datas); die;

       if(isset($datas['app']['Id'])){
        session()->put('applicantId', $datas['app']['Id']);
        }
        session()->put('Contact__c', $datas['app']['Contact__c']);
        return view('placement-program/ApplicantResume')->with(compact('datas'));
    
      //  return view('placement-program/ApplicantResume');

    }
 


    public function ajaxApplicantResume(Request $request){

        $finalReq = $request->all();
    
    $finalReq['applicant']['id']=session()->get('applicantId');
    $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
    $finalReq['applicantData']=json_encode($finalReq['applicant']);
    $finalReq['isInternal']=session()->get('isInternal');
    
    unset($finalReq['_token']);
    unset($finalReq['applicant']);
  
  
  
  

//echo "<pre>"; print_r($finalReq);die;

return  'App\Services\Helper'::postRequest($finalReq,'ApiApplicantResumeController');

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
