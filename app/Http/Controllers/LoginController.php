<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $response='-';
      if(isset($_GET['v'])){
      $val['email']=$_GET['email'];;
      $val['verifyAccountKey']=$_GET['v'];
      $response='App\Services\Helper'::postRequest($val,'ApiLoginAccountController');
      $response=json_decode($response,1);
      }
       
        return view('login')->with(compact('response'));
    }

    public function ajaxAfterLogin(Request $request)
    {
      $finalReq = $request->all();
      $finalReq['verifyAccountKey']='No';
      $response='App\Services\Helper'::postRequest($finalReq,'ApiLoginAccountController');
       $response=json_decode($response,1);
     
       $response=json_decode($response,1);
       session()->put('conId', $response['conId']);
       unset($response['conId']);
     return json_encode($response);
       
  }

}
