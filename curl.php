<?php

#CRAWLING FROM FACEBOOK
$token = “<token>“;
$fb_string = “<URL>”.$token;

$ch = curl_init($fb_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$fb_result = curl_exec($ch);

## SENDING TO FLUME
$url = 'http://127.0.0.1:port';

$data_string = "[{ 'headers' : { 'timestamp' : '".time()."', 'host' : 'random_host.example.com' }, 'body' : '".str_replace("'",'',$fb_result)."' }]";                                                                                   

$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);       

$result = curl_exec($ch);

print_r($result);
