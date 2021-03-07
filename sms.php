<?php
//post
$url="https://www.way2sms.com/api/v1/sendCampaign";
$message = urlencode("message-text");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=LRFCSM2HK3EQBAR4HDQPAR7J68A88T0Y&secret=ZO05L4H71S31NKM2&usetype=stage&phone=9309553784&senderid=9545846507&message=abc123@1aw");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>