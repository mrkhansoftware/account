<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ScheduleCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = URL::current();
        $viewName='';

        if (!isset($_GET['orgid'])) {
            $idCon = 'App\Services\Helper'::sessionConId();
            if ($idCon == '') {
                return 'App\Services\Helper'::returnUrl();
            }
            if (stripos(strtoupper($page), strtoupper('ScheduleCallBVisa'))) {
                $idCon = 'isB1VisaLink' .  $idCon;
                $viewName='b1-program/ScheduleCallBVisa';
            }else if (stripos(strtoupper($page), strtoupper('ScheduleCallAgent'))) {
                $idCon = 'isAgentLink' .  $idCon;
                $viewName='agent-bookings/ScheduleCallAgent';
            } else if (stripos(strtoupper($page), strtoupper('ScheduleCallJvisa'))) {
                $idCon = 'isJ1VisaLink' .  $idCon;
                $viewName='j1-visa/ScheduleCallJvisa';
            } else if (stripos(strtoupper($page), strtoupper('ScheduleCall'))) {
                $idCon = 'isPlacementLink' .  $idCon;
                $viewName='placement-program/ScheduleCall';
            } else {
                return 'App\Services\Helper'::returnUrl();
            }
        } else {
            $idCon = 'isOrganizationLink' . $_GET['orgid'];
            $viewName='host-company/scheduleCallJVisaSupervisor';
        }






        $datasResp = 'App\Services\Helper'::getRequest('ApiSelfScheduleCallController/' . $idCon);
        $datasResp = json_decode($datasResp, true);
        $datas = json_decode($datasResp, true);
        //echo '<pre>';print_r($datas);die;
        return view($viewName)->with(compact('datas'));
    }
    public function ajaxscheduleCall(Request $request){ 

        $req=$request->all();
        if(isset($req['requestResponseStr'])){
            $data= json_decode($req['requestResponseStr'], true);
        }
        $data['contID']= $req['contactId'];
        $data['timeZoneDetected']=$req['timeZoneDetected'];
        $data['scheduleCallType']=$req['scheduleCallType'];   
        if($req['methodType']=='showSlots'){
            
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='showSlots';

        }else if($req['methodType']=='nextSlots'){
            
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='nextSlots';

        }else if($req['methodType']=='preSlots'){
            
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='preSlots';
        }
        else if($req['methodType']=='changetimezoneAction'){
            
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='changetimezoneAction';
        }
        else if($req['methodType']=='reScheduleCall'){
            
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='reScheduleCall';
        }
        else if($req['methodType']=='slotSelectedMethod'){
            
            $data['selectedSlot']=$req['slotSelected'];
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='slotSelectedMethod';
        }
        else if($req['methodType']=='createEvent'){
           
            $data['questionString']=$req['questionStr'];
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='createEvent';
        }


        
        unset($finalReq['questionStr']);
        unset($finalReq['slotSelected']);
        unset($finalReq['requestResponseStr']);
        $datas='App\Services\Helper'::postRequest($finalReq,'ApiSelfScheduleCallController');
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        //session()->put('callInformation', $datas);
            
        return $datas;
        
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
