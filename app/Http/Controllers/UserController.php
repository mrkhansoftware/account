<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        die;
    }

    public function getICS()
    {
        if(isset($_GET['id'])){
        
        $datas = 'App\Services\Helper'::getRequest('ApiScheduleCallICSFileClass/' . $_GET['id']);
        $datas = json_decode($datas, true);
        $datas = json_decode($datas, true);
        $datas['description']=str_replace('<br>', '\\n', $datas['description']);
        $datas['description']=str_replace(' ', '##spaceManage##', $datas['description']);
        $datas['eventName']=str_replace(' ', '##spaceManage##', $datas['eventName']);
        $icalObject = "BEGIN:VCALENDAR
        VERSION:2.0
        BEGIN:VEVENT";
        $icalObject.="
        DTSTART:".$datas['DTSTART'];
        $icalObject.="
        DTEND:".$datas['DTEND'];
        $icalObject.="
        SUMMARY:".$datas['eventName'];
        $icalObject.="
        DESCRIPTION:".$datas['description'];
        $icalObject.="
        LOCATION:".$datas['hangoutLink'];
        $icalObject.="
        END:VEVENT
        END:VCALENDAR
        ";
        header('Content-type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="IIEEX-Cal.ics"');
        $icalObject = str_replace(' ', '', $icalObject);
        $icalObject = str_replace('##spaceManage##', ' ', $icalObject);
        echo $icalObject;
        }
    }
    public function csrfHandle()
    {
      return '{"Status":"Ok"}';
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
