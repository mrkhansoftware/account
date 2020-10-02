<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalEvaluationHostComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
if(!isset($_GET['orgid'])){
    $idCon= 'App\Services\Helper'::sessionConId();
    if($idCon==''){
       return 'App\Services\Helper'::returnUrl();
    }
    }else{
        $idCon='isOrganizationLink'.$_GET['orgid'];
    }
        $datas='App\Services\Helper'::getRequest('ApiFinalEvaluationHCController/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
      // echo '<pre>'; print_r($datas); die;


        return view('host-company/final_evaluation_hc_account')->with(compact('datas'));
    

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
        $EncId=$finalReq['EncId'];
        $finalReq['applicant']['id']=$finalReq['applicantId'];
        $finalReq['onfrm']['id']=$finalReq['onfrmId'];
        $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        $finalReq['onlineFormData']=json_encode($finalReq['onfrm']);
      
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onfrm']);
        unset($finalReq['EncId']);
        unset($finalReq['applicantId']);
        unset($finalReq['onfrmId']);
        unset($finalReq['Contact__c']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['Google_Drive_Evaluation_Form__c']);
     // echo '<pre>'; print_r($finalReq);die;
      
    
     $resp= 'App\Services\Helper'::postRequest($finalReq,'ApiFinalEvaluationHCController');
   if($resp=='"OK"'){
    return redirect()->action('FinalEvaluationHostComController@index', ['isSave' => 1, 'orgid' => $EncId]);

   }else{
       echo $resp;
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
