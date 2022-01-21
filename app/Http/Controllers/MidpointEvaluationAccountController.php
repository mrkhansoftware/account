<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidpointEvaluationAccountController extends Controller
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

          $datas='App\Services\Helper'::getRequest('ApiMidpointEvaluationClass/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
          //echo '<pre>'; print_r($datas); die;

         return view('j1-visa/midpoint_evaluation_account')->with(compact('datas'));

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

        $finalReq['applicant']['id']=$finalReq['applicantId'];
        $finalReq['onfrm']['id']=$finalReq['onfrmId'];
        $finalReq['applicant']['Contact__c']=$finalReq['Contact__c'];
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        $finalReq['onlineFormData']=json_encode($finalReq['onfrm']);

        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onfrm']);

        unset($finalReq['lastNameFirstName']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);
        unset($finalReq['NewGdriveID__c']);
        unset($finalReq['Google_Drive_Evaluation_Form__c']);
        unset($finalReq['onfrmId']);
        unset($finalReq['Contact__c']);






    //echo "<pre>"; print_r($finalReq);die;

       $resp='App\Services\Helper'::postRequest($finalReq,'ApiMidpointEvaluationClass');
       if($resp=='"OK"'){
    return redirect()->action('MidpointEvaluationAccountController@index', ['isSave' => 1]);
       }else{

    'App\Services\Helper'::apiErrorReq($finalReq,$resp,'ApiMidpointEvaluationClass');
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
