<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
<<<<<<< HEAD
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      
      
      return view('login');
  }

 



=======
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      //  $value='App\Services\Helper'::getRequest();
      //  $new_value  = json_decode() ;
      //  echo "<pre>"; 

      // print_r($value['Appli']);
       // die;   
       
        return view('login');
    }

    public function ajaxAfterLogin(Request $request)
    {
        
      //  $value='App\Services\Helper'::getRequest();
      //  $new_value  = json_decode() ;
      //  echo "<pre>"; 

      // print_r($value['Appli']);
       // die;   
       
        return $request->all();
    }

>>>>>>> cbb5206f6ab8813a7c7005f8690cf9f43cdb5257
}
