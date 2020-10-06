<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
         $datas='App\Services\Helper'::getRequest('ApiProfileAccountController/'.$idCon);
         $datas = json_decode($datas, true);
         $datas = json_decode($datas, true);
         return view('profile/profile')->with(compact('datas'));
        
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
        unset($finalReq['_token']);
        $finalReq['con']['id']=session()->get('conIdUser');
        $body['conData']=json_encode($finalReq['con']);
        $body['dob']=json_encode($finalReq['dob']);

        $resp='App\Services\Helper'::postRequest($body,'ApiProfileAccountController');
        if($resp=='"OK"'){
        return redirect()->action('ProfileController@index', ['isSave' => 1]);
        }else{
            echo $resp;
        }
       
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
