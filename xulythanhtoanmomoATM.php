<?php
header('Content-type: text/html; charset=utf-8');

include('helper_momo.php');

session_start();
$totalPrice = $_SESSION['totalPrice'];
 
$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

$orderInfo = "Thanh toán qua ATM";
$amount = "$totalPrice";
$orderId = time() . "";
$redirectUrl = "http://localhost/DLD_check/index.php";
$ipnUrl = "http://localhost/DLD_check/index.php";
$extraData = isset($_POST["extraData"]) ? $_POST["extraData"] : "";

$requestId = time() . "";
$requestType = "payWithATM";
//before sign HMAC SHA256 signature
$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
$signature = hash_hmac("sha256", $rawHash, $secretKey);
$data = array(
    'partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "MomoTestStore",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature
);
$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);  // decode json

// Check if 'payUrl' exists in $jsonResult
if (isset($jsonResult['payUrl'])) {
    // Redirect to payUrl
    header('Location: ' . $jsonResult['payUrl']);
} else {
    // Handle the case when 'payUrl' is not set
    echo "Error: Pay URL not found.";
}
?>