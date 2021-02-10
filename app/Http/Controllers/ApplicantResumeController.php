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
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            $idCon = 'isInternalOrganization' . $_GET['orgidInternal'];
        }
        $datas = 'App\Services\Helper'::getRequest('ApiApplicantResumeController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die;

        return view('placement-program/ApplicantResume')->with(compact('datas'));

        //  return view('placement-program/ApplicantResume');

    }


    public function ajaxApplicantResume(Request $request)
    {
        $finalReq = $request->all();
        $finalReq['applicant']['id'] = $finalReq['applicantId'];
        $finalReq['applicant']['Contact__c'] = $finalReq['Contact__c'];
        $finalReq['applicantData'] = json_encode($finalReq['applicant']);
        $finalReq['isInternal'] = session()->get('user');
        unset($finalReq['_token']);
        unset($finalReq['applicant']);
        unset($finalReq['applicantId']);
        unset($finalReq['Contact__c']);
        unset($finalReq['user']);
        $response='App\Services\Helper'::postRequest($finalReq, 'ApiApplicantResumeController');
        if(strripos($response,'\"status\":\"OK\",\"response\":')==''){
            'App\Services\Helper'::apiErrorReq($finalReq,$response,'ApiApplicantResumeController');
        }
        return  $response;
    }



    public function resumeDetails()
    {
        if (isset($_GET['isInternal']) && $_GET['isInternal'] == 'isInternal') {
            $idCon = '_isInternal_' . $_GET['id'];
        } else if (isset($_GET['status']) && isset($_GET['appId'])) {
            $idCon = $_GET['id'];
            $idCon .= '_hrPerson_' . $_GET['appId'];
        } else {
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
        }
        $datas = 'App\Services\Helper'::getRequest('ApiApplicantCVResumeTemplateClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //echo $idCon.'<pre>'; print_r($datas); die;
        return view('placement-program/ApplicantPDFWithVideo')->with(compact('datas'));

        //  return view('placement-program/ApplicantResume');

    }

    public function resumeDetailsPassword(Request $request)
    {
        $req = $request->all();
        $idCon = $req['contID'] . '_hrPerson_' . $req['applicationId'] . '_passwordStr_' . $req['password'];
        $datas = 'App\Services\Helper'::getRequest('ApiApplicantCVResumeTemplateClass/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        return view('placement-program/ApplicantPDFWithVideo', ['articles' => 'a'])->with(compact('datas'));
    }



    public function applicantResumeAjaxCall(Request $request)
    {
        $finalReq = $request->all();
        return  'App\Services\Helper'::postRequest($finalReq, 'ApiApplicantCVResumeTemplateClass');
    }



    public function ajaxApplicantResumeAttachment(Request $request)
    {   $returnData=[];
        $getTime=getdate(date("U"))[0];
        $finalReq = $request->all();
        $contactRef=$finalReq['contactRef'];
        $filetype=$finalReq['file_type'];
        $filesize=$finalReq['file_size'];
        $previousEnd=$finalReq['previousEnd'];
        $resumeableLink=$finalReq['resumeableLink'];
        $filedata=$finalReq['content'];
        $fileNameUserEnd=$finalReq['fileNameUserEnd'];
        $fileUrl=$finalReq['fileUrl'];
        $folderName=$finalReq['appName'].'_'.$finalReq['appTime'].$finalReq['applicantId'];
        $filename='File_Document_'.$getTime.$finalReq['applicantId'];
        if($resumeableLink==null || $resumeableLink==''){
        
        $fileUrl=$folderName.'/'.$filename;
    }
        $content=str_replace('data:application/octet-stream;base64,','',$filedata);    
        $filedata=base64_decode($content);
        $bodysize=strlen($filedata);
        $previousEnd=$previousEnd==''?'0':$previousEnd;
        if($resumeableLink!=null && $resumeableLink!=''){
            $previousEnd=explode('--previousEnd--',$resumeableLink)[1];
            $resumeableLink=explode('--previousEnd--',$resumeableLink)[0];
        }
        $link= 'App\Services\Helper'::resumeableFileUpload($contactRef,$folderName,$filename,$filetype,$filesize,$bodysize,$previousEnd,$resumeableLink,$filedata,$fileNameUserEnd);
        $previousEnd=$bodysize+$previousEnd;
        $returnData['resumeLink']=$link.'--previousEnd--'.$previousEnd;
        $returnData['fileUrl']=$fileUrl;
         return $returnData;
    }
}
