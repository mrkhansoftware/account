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
    {
        
       $value='App\Services\Helper'::getRequest();
      //  $new_value  = json_decode() ;
       echo "<pre>"; 

      print_r($value['Appli']);
        die;   
       
        return view('login');
    }
}
