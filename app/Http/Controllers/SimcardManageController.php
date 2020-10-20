<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class SimcardManageController extends Controller
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
        $datas='App\Services\Helper'::getRequest('ApiSimCardManageController/'.$idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        return view('simcardmanagement/simcardmanagepage')->with(compact('datas'));
   }


    public function commonMethodSimcardManage(Request $request)
    {
    
    $requestDataPage=$requestData=$request->all();
    

    
    if($requestData['methodType']=='fetchAccount'){
    $tab_name = $request->tabName;
    $requestData['searchObjString']=json_encode($requestData['searchObj']);
    unset($requestData['tabName']);
    unset($requestData['searchObj']);
    unset($requestData['accesskey']);
    $datas='App\Services\Helper'::postRequest($requestData,'ApiSimCardManageController');
    $datas = json_decode($datas, true);
    $datas = json_decode($datas, true);
	$view = view("simcardmanagement/common_page_simcardmanage",compact('tab_name','datas','requestDataPage'))->render();
    return response()->json(['html'=>$view,'totalRecords'=>$datas['totalRecords'],'totalApplicantRecords'=>count($datas['appList'])]);
    }else{
        $datas='App\Services\Helper'::postRequest($requestData,'ApiSimCardManageController');
        return $datas; 
    }
        //return ['Hello','World'];
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
