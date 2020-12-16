<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuxVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('MuxVideo');
    }
    public function index2()
    {
        return view('MuxVideoResult');
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

    public function muxVideoLinkMethod(Request $request){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.mux.com/video/v1/uploads",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{ \"new_asset_settings\": { \"playback_policy\": [\"public\"] }, \"cors_origin\": \"*\" }",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic ZGJjOTU1NGYtODgzZi00OGQ1LWE0MjUtYjE1ZDM1Y2JiZTllOklER0tpcEo2em5DVUpGVjRmR1pXK2hqbmJjTVd1VW5NcElVMHd2bm5ZUU95cjdaY3U5SmhYV3hFSmcyN21tZll6elB5RWZNeGRLTA=="
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    } 
}
