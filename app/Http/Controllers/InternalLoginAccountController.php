<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalLoginAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function internal()
    {
        session()->flush();
        $response = '-';
        if (isset($_GET['salesforceUserAuth'])) {
            $val['salesforceUserAuth'] = $_GET['salesforceUserAuth'];
            $val['verifyAccountKey'] = 'No';
            $response = 'App\Services\Helper'::postRequest($val, 'ApiLoginAccountController');
            $response = json_decode($response, 1);

            $response = json_decode($response, 1);
            if ($response['canAccessAccount'] == 'Yes') {
                session()->put('conIdUser', $response['conId']);
                session()->put('contactName', $response['contactName']);
                session()->put('userEmail', $response['userEmail']);
                session()->put('sessionIsInternal', 'Yes');
                if ($response['simcardPortalUser'] == 'Yes') {
                    return redirect()->action('SimcardManageController@index');
                } else {
                    return redirect()->action('ProfileController@index');
                }
            }
        }
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
