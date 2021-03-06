<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalEvaluationAccountController extends Controller
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
  
          $datas='App\Services\Helper'::getRequest('ApiFinalEvaluationController/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
          //echo '<pre>'; print_r($datas); die;
          session()->put('lastNameFirstName', isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:'');
          if(isset($datas['ap']['Id'])){
          session()->put('applicantId', $datas['ap']['Id']);
          }
          if(isset($datas['ap']['NewGdriveID__c'])){
            session()->put('NewGdriveID__c', $datas['ap']['NewGdriveID__c']);
            }

            if(isset($datas['ap']['Google_Drive_Evaluation_Form__c'])){
                session()->put('Google_Drive_Evaluation_Form__c', $datas['ap']['Google_Drive_Evaluation_Form__c']);
                }
            
          
          if(isset($datas['onfrm']['Id'])){
            session()->put('onfrmId', $datas['onfrm']['Id']);
            }
          session()->put('Contact__c', isset($datas['contID'])?$datas['contID']:'');
         return view('j1-visa/final_evaluation_account')->with(compact('datas'));
        
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
     
        $finalReq['applicant']['id']=session()->get('applicantId');
        $finalReq['onfrm']['id']=session()->get('onfrmId');
        $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        $finalReq['onlineFormData']=json_encode($finalReq['onfrm']);
      
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onfrm']);
      
      
      
      
    
    //echo "<pre>"; print_r($finalReq);die;
    
       $resp='App\Services\Helper'::postRequest($finalReq,'ApiFinalEvaluationController');
       //die;
       if($resp=='"OK"'){
    return redirect()->action('FinalEvaluationAccountController@index', ['isSave' => 1]);
       }else{
          
    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiFinalEvaluationController');
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
