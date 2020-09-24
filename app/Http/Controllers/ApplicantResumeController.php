<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_GET['orgidInternal'])) {
            session()->put('isInternal', 'No');
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            session()->put('isInternal', 'Yes');
            $idCon = 'isInternalOrganization' . $_GET['orgidInternal'];
        }
        $datas = 'App\Services\Helper'::getRequest('ApiApplicantResumeController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die;

        if (isset($datas['app']['Id'])) {
            session()->put('applicantId', $datas['app']['Id']);
        }
        session()->put('Contact__c', $datas['app']['Contact__c']);
        return view('placement-program/ApplicantResume')->with(compact('datas'));

        //  return view('placement-program/ApplicantResume');

    }

    public function resumeDetails(){
        if (isset($_GET['isInternal']) && $_GET['isInternal']=='isInternal') {
            $idCon='_isInternal_'.$_GET['id'];

        }else if(isset($_GET['status']) && isset($_GET['appId'])){
            $idCon=$_GET['id'];
            $idCon.='_hrPerson_'.$_GET['appId'];

        }else{
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        }
        $datas = 'App\Services\Helper'::getRequest('ApiApplicantCVResumeTemplateClass/' . $idCon);
       $datas = json_decode($datas, true);
      $datas = json_decode($datas, true);
//         echo $idCon.'<pre>'; print_r($datas); die;

        return view('placement-program/ApplicantPDFWithVideo')->with(compact('datas'));
    
      //  return view('placement-program/ApplicantResume');

    }

    public function resumeDetails2(Request $request){
       echo $_GET['password3'];
      print_r( $request->all()); die;

        return view('placement-program/ApplicantPDFWithVideo')->with(compact('datas'));
    
      //  return view('placement-program/ApplicantResume');

    }



    public function ajaxApplicantResume(Request $request)
    {
        $finalReq = $request->all();
        $finalReq['applicant']['id'] = session()->get('applicantId');
        $finalReq['applicant']['Contact__c'] = session()->get('Contact__c');
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        $finalReq['isInternal'] = session()->get('isInternal');
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        return  'App\Services\Helper'::postRequest($finalReq, 'ApiApplicantResumeController');
    }


}
