<?php

//Proxy to the api/receive method in order to not reveal the callback URL

include 'include.php';

$invoice_id = $_GET['invoice_id'];
$my_bitcoin_address= $_GET['bit'];
$callback_url = $mysite_root ."callback.php?invoice_id=". $invoice_id ."&secret=" . $secret;

$response = json_decode(file_get_contents($blockchain_root . "api/receive?method=create&callback=" . urlencode($callback_url) . "&address=" . $my_bitcoin_address));

// Transform into JSON=>
// json_encode(array('input_address' => $response->input_address ));
echo "Send some Bitcoins to this Address::" . $response->input_address;


?>