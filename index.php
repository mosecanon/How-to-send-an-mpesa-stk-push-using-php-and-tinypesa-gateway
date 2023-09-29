<?php

$phonenumber = '071234567'; // Phone number paying
$Account_no = '5689'; // Enter account number optional
$amount = 1;
$url = 'https://tinypesa.com/api/v1/express/initialize';

$data = array(
    'amount' => $amount,
    'msisdn' => $phonenumber,
    'account_no'=> $Account_no
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: ' // Replace with your api key
 );

$info = http_build_query($data);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
$msg_resp = json_decode($resp);
print_r($msg_resp);
?>
