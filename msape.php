<?php
require "vendor/autoload.php";
use Kabangi\Mpesa\Init as Mpesa;
// You can also pass your own config here.
// Check the folder ./config/mpesa.php for reference
$mpesa = new Mpesa();
try {
    $response = $mpesa->STKPush([
        'amount' => 10,
        'PhoneNumber' => '254718145956',
        'callBackURL' => 'https://example.com/v1/payments/C2B/confirmation',
        'AccountReference' => 'Account',
        'TransactionDesc' => 'test',       
        'Remarks' => 'Test'
    ]);
}catch(\Exception $e){
    $response = json_decode($e->getMessage());
}
header('Content-Type: application/json');
echo json_encode($response);