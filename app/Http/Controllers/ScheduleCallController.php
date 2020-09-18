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
            $viewName='';
        }






        $datas = 'App\Services\Helper'::getRequest('ApiSelfScheduleCallController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        session()->put('callInformation', $datas);
        //echo '<pre>';print_r($datas);die;
        return view($viewName)->with(compact('datas'));
    }
    public function ajaxscheduleCall(Request $request){

        $req=$request->all();
        $data= session()->get('callInformation');
        if($req['methodTye']=='showSlots'){

            $data['timeZoneDetected']=$req['timeZoneDetected'];
            $data['scheduleCallType']=$req['scheduleCallType'];
            $finalReq['wpcContent']=json_encode( $data);
            $finalReq['processType']='showSlots';
        }


        return 'App\Services\Helper'::postRequest($finalReq,'ApiSelfScheduleCallController');
        
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
