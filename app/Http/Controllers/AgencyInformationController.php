<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyInformationController extends Controller
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
  
          $datas='App\Services\Helper'::getRequest('ApiAgencyPriceListUploadClass/'.$idCon);
          $datas = json_decode($datas, true);
          $datas = json_decode($datas, true);
          session()->put('contID', $datas['contID']);
          session()->put('accountId', $datas['accountId']);
          session()->put('accountName', $datas['accountName']);
           //echo '<pre>'; print_r($datas); die;
         return view('agent-bookings/AgencyInformation')->with(compact('datas'));
   
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
        $finalReq=$request->all();
        if(isset($finalReq['priceList'])){
            $finalReq['filePriceList']= base64_encode(file_get_contents($request->file('priceList')));
            $finalReq['fileTypePriceList']=$request->file('priceList')->getMimeType();
            $finalReq['contID']=session()->get('contID');
            $finalReq['accountId']=session()->get('accountId');
            $finalReq['accountName']=session()->get('accountName');
            unset($finalReq['priceList']);
            unset($finalReq['_token']);
      $resp='App\Services\Helper'::postRequest($finalReq,'ApiAgencyPriceListUploadClass');
      if($resp=='"OK"'){
      return redirect()->action('AgencyInformationController@index', ['isSave' => 1]);
      }else{
          echo $resp;
      }
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
