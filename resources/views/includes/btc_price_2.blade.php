<?php
use App\Http\Controllers\UserController;  

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.coindesk.com/v1/bpi/currentprice.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POSTFIELDS, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result = curl_exec($ch);
$msg = json_decode($result,true);

   $price = $msg['bpi']['USD']['rate'];

curl_close($ch);
?>
{{$price}}