<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$postClass='ApiNewCandidatesClass/';
$response = json_decode('App\Services\Helper'::auth(), true);

      $access_token = $response['access_token'];
      $instance_url = $response['instance_url'];
      $url = $instance_url . "/services/apexrest/" . $postClass;
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_TIMEOUT, 300);
      curl_setopt(
         $curl,
         CURLOPT_HTTPHEADER,
         array("Authorization: OAuth $access_token", "Content-type: application/json")
      );
      $json_response = curl_exec($curl);
      $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

       print_r($json_response);




       
       

die;






        $datas='App\Services\Helper'::getRequest('ApiNewCandidatesClass/');
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
          

        return view('new-candidates')->with(compact('datas'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newCandidateAjax( Request $request)
    {
        $requestData=$request->all();

        unset($requestData['accesskey']);
        $datas='App\Services\Helper'::postRequest($requestData,'ApiNewCandidatesClass');
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        $returnHTML = view('new-candidates-ajax',compact('datas'))->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML,'pass'=>$datas['intership_password_info']));
        
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
