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

        public static function getRequest(){
            $response = json_decode('App\Services\Helper'::auth(), true);
            
            $access_token = $response['access_token'];
            $instance_url = $response['instance_url'];
            $url = $instance_url."/services/apexrest/APIParticipantInformationAccountClass/idaa=aaa&name=khan.ashif.ayaz@gmail.com";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $access_token","Content-type: application/json"));
            $json_response = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $json_response = json_decode($json_response, true);
            $json_response = json_decode($json_response, true);
            return $json_response;
            }

}
?>