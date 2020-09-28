<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HCSiteVisitFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_GET['orgid'])) {
           
            return 'App\Services\Helper'::returnUrl();
        
    } else {
        $idCon = 'isOrganizationLink' . $_GET['orgid'];
    }
    $datas = 'App\Services\Helper'::getRequest('ApiHostCompanySiteVisitForm/' . $idCon);
    $datas = json_decode($datas, true);
    $datas = json_decode($datas, true);
    //echo '<pre>'; print_r($datas); die;
    return view('others/HostCompanySiteVisitForm')->with(compact('datas'));
  
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
        $finalReq=$request->all();
        $EncId=$finalReq['app']['Encrypted_Host_Company_Id__c'];
       $unique_Folder_Id='';
        if($finalReq['Site_Visit_Representative_Folder_Id__c']=='' || 'App\Services\Helper'::isFolderExist($finalReq['Site_Visit_Representative_Folder_Id__c'])!='200'){
               
            if($finalReq['NewGdriveID__c']=='' || 'App\Services\Helper'::isFolderExist($finalReq['NewGdriveID__c'])!='200'){
                $Google_Drive_Folder_Id='App\Services\Helper'::returnFolderId('applicant');
                $unique_Folder_Id='App\Services\Helper'::createSubFolder($Google_Drive_Folder_Id, $finalReq['lastNameFirstName']);
                $finalReq['app']['NewGdriveID__c']=$unique_Folder_Id;
            }else{
                $unique_Folder_Id= $finalReq['NewGdriveID__c'];
            }

            if($finalReq['HostCompany_Gdrive_Folder_Id__c']!='' && 'App\Services\Helper'::isFolderExist($finalReq['HostCompany_Gdrive_Folder_Id__c'])=='200'){
                $unique_Folder_Id=$finalReq['HostCompany_Gdrive_Folder_Id__c'];
                $unique_Folder_Id='App\Services\Helper'::createSubFolder($unique_Folder_Id, 'Site Visit');
           }else{
            $unique_Folder_Id='App\Services\Helper'::createSubFolder($unique_Folder_Id, 'Site Visit');
              
           }

           $finalReq['app']['Site_Visit_Representative_Folder_Id__c']=$unique_Folder_Id;
           $finalReq['app']['Link_Site_Visit__c']='https://drive.google.com/drive/u/0/folders/'.$unique_Folder_Id;

        }else{
            $unique_Folder_Id= $finalReq['Site_Visit_Representative_Folder_Id__c'];
        }
$numberOfFile=0;
        if(isset($finalReq['file1'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file1')));
            $fileType=$request->file('file1')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file2'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file2')));
            $fileType=$request->file('file2')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file3'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file3')));
            $fileType=$request->file('file3')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file4'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file4')));
            $fileType=$request->file('file4')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file5'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file5')));
            $fileType=$request->file('file5')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file6'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file6')));
            $fileType=$request->file('file6')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file7'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file7')));
            $fileType=$request->file('file7')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file8'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file8')));
            $fileType=$request->file('file8')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file9'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file9')));
            $fileType=$request->file('file9')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file10'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file10')));
            $fileType=$request->file('file10')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file11'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file11')));
            $fileType=$request->file('file11')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file12'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file12')));
            $fileType=$request->file('file12')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file13'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file13')));
            $fileType=$request->file('file13')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file14'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file14')));
            $fileType=$request->file('file14')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }
          if(isset($finalReq['file15'])){
            $numberOfFile++;
            $fileCont = base64_encode(file_get_contents($request->file('file15')));
            $fileType=$request->file('file15')->getMimeType();
            'App\Services\Helper'::fileUpload($unique_Folder_Id ,'SiteVisitPhoto_'.$numberOfFile, $fileType, $fileCont);
        
          }


        $finalReq['applicantData'] = json_encode($finalReq['app']);
        $finalReq['onlineFormData'] = json_encode($finalReq['onfrm']);
       
        unset($finalReq['_token']);
        unset($finalReq['app']);

        unset($finalReq['Site_Visit_Representative_Folder_Id__c']);
        unset($finalReq['lastNameFirstName']);
        unset($finalReq['HostCompany_Gdrive_Folder_Id__c']);
        unset($finalReq['NewGdriveID__c']);


        unset($finalReq['file1']);
        unset($finalReq['file2']);
        unset($finalReq['file3']);
        unset($finalReq['file4']);
        unset($finalReq['file5']);
        unset($finalReq['file6']);
        unset($finalReq['file7']);
        unset($finalReq['file8']);
        unset($finalReq['file9']);
        unset($finalReq['file10']);
        unset($finalReq['file11']);
        unset($finalReq['file12']);
        unset($finalReq['file13']);
        unset($finalReq['file14']);
        unset($finalReq['file15']);
        unset($finalReq['onfrm']);
        

         $response='App\Services\Helper'::postRequest($finalReq, 'ApiHostCompanySiteVisitForm');
        if($response=='"OK"'){
        return redirect()->action('HCSiteVisitFormController@index', ['isSave' => 1, 'orgid' => $EncId]);
        }else{
            echo $response;die;
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
