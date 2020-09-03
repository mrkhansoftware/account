<?php
namespace App\Services;

class Helper {

     
     public static function auth(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://test.salesforce.com/services/oauth2/token',
        CURLOPT_USERAGENT => 'cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>  array(
        'grant_type' => 'password',
        'client_id' => '3MVG9g9rbsTkKnAX2ndXG3SYwlfPgGhQl64BjbbWti6qU7Iem1XCdarMD5zUdOD8UJK9ogfI.vQNuIRe90mNb',
        'client_secret'=>'3756070584289830677',
        'username'=>'admin@gaccca.org.devsb',
        'password'=>'testtest12hECKcqBNE0FIwxR20JFD8bPQw'
        )
        ));
        
        $resp = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        curl_close($curl);
        return $resp;
        }

        public static function getRequest($postClass){
            $response = json_decode('App\Services\Helper'::auth(), true);
            
            $access_token = $response['access_token'];
            $instance_url = $response['instance_url'];
            $url = $instance_url."/services/apexrest/".$postClass;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $access_token","Content-type: application/json"));
             $json_response = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            
            return $json_response;
            }

            public static function postRequest($postContent,$postClass){
            $content=json_encode($postContent);;
            $response = json_decode('App\Services\Helper'::auth(), true);
                $access_token = $response['access_token'];
            $instance_url = $response['instance_url'];
                $url = $instance_url."/services/apexrest/".$postClass;
                $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,array("Authorization: OAuth $access_token","Content-type: application/json"));
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
            echo  $json_response = curl_exec($curl);
             $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                  
            }






          

  public static function authGdrive(){

    $clientKey='4079353945-5latn15mlkgr63ee5fc5pqt6bqicr1sd.apps.googleusercontent.com';
    $secret='bSP7k1WxFm_6guSrc2er51iW';
    $accesstokenEndPoint='https://www.googleapis.com/oauth2/v4/token';
    $refresh_token='1/HnxmgQ4VvqXP6v3KVSEssQrwV7o77GU0_rz1ER3F1tS_xcvkAQRJkwc_bzYgSLUh';
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $accesstokenEndPoint,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "refresh_token=".$refresh_token."&client_secret=".$secret."&client_id=".$clientKey."&grant_type=refresh_token",
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded",
    "Content-Type: application/x-www-form-urlencoded"
    ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    $response = json_decode($response, true);
    return  $response['access_token'];
    }
    
    public static function createSubFolder($FolderId, $filename){
            $subFileUploadEndpoint='https://www.googleapis.com/upload/drive/v2/files?uploadType=multipart';
            $access_token='App\Services\Helper'::authGdrive();
            $filetype='application/vnd.google-apps.folder';
            
            $boundary = "----------9889464542212";
             $delimiter = "\r\n--" . $boundary . "\r\n";
             $close_delim = "\r\n--" . $boundary . "--";
            $data = $delimiter;
            $data .= "Content-Type: application/json; charset=UTF-8\r\n\r\n";
            $data .= '{ "title" : "'.$filename.'",'.' "mimeType" : "'.$filetype.'",'.'"parents":[{"id":"'. $FolderId .'"}] }';
            $data .= $close_delim;
        
            $ch = curl_init();
            $options = [
                CURLOPT_URL =>  $subFileUploadEndpoint,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => [
                    'Authorization:Bearer ' . $access_token,
                    'Content-Type:multipart/related; boundary=' . $boundary,
                ],
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => 0,
            ];
            curl_setopt_array($ch, $options);
            echo   $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close ($ch);
       die;     
    $response = json_decode($result, true);
    return  $response['id'];
      }
    
      public static function fileUpload($FolderId, $filename,$filetype, $bodyEncoded){
        $subFileUploadEndpoint='https://www.googleapis.com/upload/drive/v2/files?uploadType=multipart';
        $access_token='App\Services\Helper'::authGdrive();
     
    $boundary = "xxxxxxxxxx";
    $data = "--" . $boundary . "\r\n";
    $data .= "Content-Type: application/json; charset=UTF-8\r\n\r\n";
    $parentIfo="{\"id\": \"" . $FolderId . "\"}";;
    $data .= "{\"title\": \"" . $filename . "\", \"mimeType\": \"" . $filetype . "\", \"parents\":[ " . $parentIfo. "]}\r\n";
    $data .= "--" . $boundary . "\r\n";
    $data .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $data .= $bodyEncoded;
    $data .= "\r\n--" . $boundary . "--";

        $lgnt=strlen($data);
        
        $ch = curl_init();
        $options = [
            CURLOPT_URL =>  $subFileUploadEndpoint,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                'Authorization:Bearer ' . $access_token,
                'Content-Type:multipart/related; boundary=' . $boundary,
                'Content-length: '.$lgnt
            
            ],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 0,
        ];
        curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        
    //echo $response = json_decode($result, true);
    //return  $response['id'];
    }
    public static function returnFolderId($typeFolder){
      $folderId='';
        if($typeFolder=='registration'){
            $folderId='0BxitLWnQbm-5aGdfVkpCMlpleVE';
    }else{
        $folderId='0BxitLWnQbm-5flVnbWNCa1NIZzdERFo0YzV2VmVnREJfd1Y0RzRkOG0xNlFXUm5oeUE5VTA';
    }
      return $folderId;
    }
    
















}
?>