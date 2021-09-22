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


      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token',
        CURLOPT_USERAGENT => 'cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>  array(
           'grant_type' => 'password',
           'client_id' => '3MVG9g9rbsTkKnAX2ndXG3SYwlfPgGhQl64BjbbWti6qU7Iem1XCdarMD5zUdOD8UJK9ogfI.vQNuIRe90mNb',
           'client_secret' => '3756070584289830677',
           'username' => 'admin@gaccca.org',
           'password' => 'testtest12gObl7WUBIl4QPoXh4ljw9cfzW'
        )
     ));

      $resp = curl_exec($curl);
      $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

      curl_close($curl);
    
    
      // return $resp;
   
echo $resp;

$postClass='ApiNewCandidatesClass/';
$response = json_decode('App\Services\Helper'::auth(), true);

      $access_token = $response['access_token'];
      $instance_url = $response['instance_url'];
      $url = $instance_url . "/services/apexrest/" . $postClass;
    



       $curl = curl_init();
       curl_setopt_array($curl, array(
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_URL => $instance_url . "/services/apexrest/" . $postClass,
         CURLOPT_USERAGENT => 'cURL Request',
         CURLOPT_POST => 0,
         CURLOPT_HTTPHEADER=> array("Authorization: OAuth $access_token", "Content-type: application/json")
      ));
 
       $resp = curl_exec($curl);
       $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
 
       curl_close($curl);
     
     
       // return $resp;
    
 echo $resp;
       

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
