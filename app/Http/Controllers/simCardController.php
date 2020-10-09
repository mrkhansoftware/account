<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idCon = 'App\Services\Helper'::sessionConId();
        if ($idCon == '') {
            return 'App\Services\Helper'::returnUrl();
        }

        $datas = 'App\Services\Helper'::getRequest('ApiSimCardController/' . $idCon);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        // echo '<pre>'; print_r($datas); die;

        return view('simCard')->with(compact('datas'));
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
        echo "<pre>";
        // print_r($request->all());

        $finalReq = $request->all();
        $finalReqSend = [];
        $simcardInfo = '';
        if ($finalReq['radiobtn'] == 'Id like to get a free SIM Card') {
            $simcardInfo .= 'Date of arrival in the U.S.: ';
            $simcardInfo .= $finalReq['arivalDateUS'] . ', ';
            $simcardInfo .= 'Carrier: ' . $finalReq['provider'];
            $finalReqSend['radiobtn'] = $finalReq['radiobtn'];
            $finalReqSend['provider'] = $finalReq['provider'];
        } else if ($finalReq['radiobtn'] == 'Id like to activate my SIM Card for the first 30 days') {

            $simcardInfo .= 'Date of activation / arrival in the U.S.: ';
            $simcardInfo .= $finalReq['activationDate'] . ', ';
            $finalReqSend['activationDate'] = $finalReq['activationDate'];
            $simcardInfo .= 'select Plan: ';
            $simcardInfo .= $finalReq['app']['PLAN__c'] . ', ';
            $finalReq['app'] = $finalReq['app'];
            $simcardInfo .= 'SIM Card Number: ';
            $simcardInfo .= $finalReq['simCardNumber'] . ', ';
            $finalReqSend['simCardNumber'] = $finalReq['simCardNumber'];
            $simcardInfo .= 'City or area code: ';
            $simcardInfo .= $finalReq['cityOrAreaCode'] . ', ';
            $finalReqSend['cityOrAreaCode'] = $finalReq['cityOrAreaCode'];
            $simcardInfo .= 'Name on credit card: ';
            $simcardInfo .= $finalReq['nameOnCreditCard'] . ', ';
            $finalReqSend['nameOnCreditCard'] = $finalReq['nameOnCreditCard'];
            $simcardInfo .= 'Credit card number: ';
            $simcardInfo .= $finalReq['creditCardNumber'] . ', ';
            $finalReqSend['creditCardNumber'] = $finalReq['creditCardNumber'];
            $simcardInfo .= 'Credit card valid thru: ';
            $simcardInfo .= $finalReq['creditCardValidThru'] . ', ';
            $finalReqSend['creditCardValidThru'] = $finalReq['creditCardValidThru'];
            $simcardInfo .= 'CVC: ';
            $simcardInfo .= $finalReq['cvc'] . ', ';
            $finalReqSend['cvc'] = $finalReq['cvc'];
            $simcardInfo .= 'I, authorize the monthly payment from this credit card every 30 days until I cancel my plan.: ';
            $simcardInfo .= 'Yes ';
        } else if ($finalReq['radiobtn'] == 'Id like to change my monthly plan to different monthly plan') {


            $simcardInfo = 'Date of plan change: ';
            $simcardInfo .= $finalReq['Dateofchange'] . ', ';
            $finalReqSend['Dateofchange'] = $finalReq['Dateofchange'];
            $simcardInfo .= 'Plan: ';
            $simcardInfo .= $finalReq['app']['PLAN__c'] . ', ';
            $finalReqSend['app'] = $finalReq['app'];
            $simcardInfo .= 'SIM Card Number: ';
            $simcardInfo .= $finalReq['simCardNumber'] . ', ';
            $finalReqSend['simCardNumber'] = $finalReq['simCardNumber'];
        } else if ($finalReq['radiobtn'] == 'Id like to change my credit card for the monthly payment') {
            $simcardInfo = 'Change my credit card: , ';
            $simcardInfo .= 'SIM Card Number: ';
            $simcardInfo .= $finalReq['simCardNumber'] . ', ';
            $finalReqSend['simCardNumber'] = $finalReq['simCardNumber'];
            $simcardInfo .= 'Name on credit card: ';
            $simcardInfo .= $finalReq['nameOnCreditCard'] . ', ';
            $finalReqSend['nameOnCreditCard'] = $finalReq['nameOnCreditCard'];
            $simcardInfo .= 'Credit card number: ';
            $simcardInfo .= $finalReq['creditCardNumber'] . ', ';
            $finalReqSend['creditCardNumber'] = $finalReq['creditCardNumber'];
            $simcardInfo .= 'Credit card valid thru: ';
            $simcardInfo .= $finalReq['creditCardValidThru'] . ', ';
            $finalReqSend['creditCardValidThru'] = $finalReq['creditCardValidThru'];
            $simcardInfo .= 'CVC: ';
            $simcardInfo .= $finalReq['cvc'] . ', ';
            $finalReqSend['cvc'] = $finalReq['cvc'];
            $simcardInfo .= 'I, authorize the monthly payment from this credit card every 30 days until I cancel my plan.: ';
            $simcardInfo .= 'Yes ';
        } else if ($finalReq['radiobtn'] == 'I would like to cancel my plan') {

            $simcardInfo = 'Cancel my plan on: ';
            $simcardInfo .= $finalReq['cancellationDate'] . ', ';
            $finalReqSend['cancellationDate'] = $finalReq['cancellationDate'];
            $simcardInfo .= 'Selected plan: ';
            $simcardInfo .= $finalReq['app']['PLAN__c'] . ', ';
            $finalReqSend['app'] = $finalReq['app'];
            $simcardInfo .= 'SIM Card Number: ';
            $simcardInfo .= $finalReq['simCardNumber'] . ', ';
            $finalReqSend['simCardNumber'] = $finalReq['simCardNumber'];
        }
        $finalReqSend['simCardInfo'] = $simcardInfo;
        $finalReqSend['radiobtn'] = $finalReq['radiobtn'];
        $finalReqSend['applicantData'] = json_encode($finalReq['app']);

        unset($finalReqSend['app']);
       //  echo "<pre>"; print_r($finalReqSend);

        $resp = 'App\Services\Helper'::postRequest($finalReqSend, 'ApiSimCardController');
        if ($resp == '"OK"') {
            return redirect()->action('simCardController@index', ['isSave' => 1]);
        } else {
          
    'App\Services\Helper'::apiErrorReq($finalReqSend,$resp,'ApiSimCardController');
            die;
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
