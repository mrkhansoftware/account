<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DS7002TrainigsplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (!isset($_GET['orgid'])) {
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            $idCon = 'isOrganizationLink' . $_GET['orgid'];
        }
        $datas = 'App\Services\Helper'::getRequest('ApiDS7002Controller/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //  echo '<pre>'; print_r($datas); die; 
        
     session()->put('lastNameFirstName', $datas['lastNameFirstName']);
     if(isset($datas['appli']['Id'])){
     session()->put('applicantId', $datas['appli']['Id']);
     }
     if(isset($datas['appli']['NewGdriveID__c'])){
       session()->put('NewGdriveID__c', $datas['appli']['NewGdriveID__c']);
       }

       if(isset($datas['appli']['Google_Drive_Evaluation_Form__c'])){
           session()->put('Google_Drive_Evaluation_Form__c', $datas['appli']['Google_Drive_Evaluation_Form__c']);
           }
       
     
     if(isset($datas['onForm']['Id'])){
       session()->put('onfrmId', $datas['onForm']['Id']);
       }
     session()->put('Contact__c', $datas['appli']['Contact__c']);

        return view('host-company/DS_7002_Trainigsplan')->with(compact('datas'));
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
        $finalReq['applicant']['id']=session()->get('applicantId');
        $finalReq['onForm']['id']=session()->get('onfrmId');
        $finalReq['applicant']['Contact__c']=session()->get('Contact__c');
        $finalReq['applicantData']=json_encode($finalReq['applicant']);
        $finalReq['onlineFormData']=json_encode($finalReq['onForm']);
        $finalReq['DSPhaseData']=json_encode($finalReq['DSPhaseListwrap']);
        
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['onForm']);
        unset($finalReq['EncId']);
        unset($finalReq['DSPhaseListwrap']);
      
      
     //echo '<pre>'; print_r($finalReq);die;
      
    
     'App\Services\Helper'::postRequest($finalReq,'ApiDS7002Controller');
   
    return redirect()->action('FinalEvaluationHostComController@index', ['isSave' => 1, 'orgid' => $EncId]);
        
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
