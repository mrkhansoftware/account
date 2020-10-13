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

    public function resetPassword()
    { 
       $oobCode=$_GET['oobCode'];
        return view('profile/resetPassword')->with(compact('oobCode'));;
    }

    public function ajaxAfterLogin(Request $request)
    {
      $finalReq = $request->all();
      $finalReq['verifyAccountKey']='No';
      $response='App\Services\Helper'::postRequest($finalReq,'ApiLoginAccountController');
       $response=json_decode($response,1);
     
       $response=json_decode($response,1);
       if( $response['canAccessAccount']=='Yes'){
       session()->put('conIdUser', $response['conId']);
       session()->put('contactName', $response['contactName']);
       session()->put('userEmail', $response['userEmail']);
       }
       unset($response['conIdUser']);
       unset($response['contactName']);
       unset($response['userEmail']);
     return json_encode($response);
       
  }

}
