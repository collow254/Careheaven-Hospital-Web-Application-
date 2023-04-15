<!DOCTYPE html>

// Set the parameters for the API request
$consumer_key = "your_consumer_key";
$consumer_secret = "your_consumer_secret";
$shortcode = "your_shortcode";
$passkey = "your_passkey";
$phone_number = "2547xxxxxxxx"; // The phone number to charge in the format 2547xxxxxxxx
$amount = 100; // The amount to charge in Kenyan Shillings
$callback_url = "http://yourdomain.com/callback"; // The URL that Safaricom will send the payment confirmation to

// Generate a random transaction ID
$transaction_id = "TRX" . rand(1000000000, 9999999999);

// Generate the timestamp in the format YYYYMMDDHHMMSS
$timestamp = date("YmdHis");

// Generate the password using the passkey, shortcode, timestamp, and transaction ID
$password = base64_encode($shortcode.$passkey.$timestamp);

// Set the API endpoint URL
$url = "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

// Set the request headers
$headers = [
    'Authorization: Basic ' . base64_encode($consumer_key . ':' . $consumer_secret),
    'Content-Type: application/json',
];

// Set the request body
$body = [
    'BusinessShortCode' => $shortcode,
    'Password' => $password,
    'Timestamp' => $timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $amount,
    'PartyA' => $phone_number,
    'PartyB' => $shortcode,
    'PhoneNumber' => $phone_number,
    'CallBackURL' => $callback_url,
    'AccountReference' => 'Your Company Name',
    'TransactionDesc' => 'Payment for goods and services',
];

// Convert the request body to JSON
$body = json_encode($body);

// Send the API request using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$response = curl_exec($ch);
curl_close($ch);

// Parse the API response
$response = json_decode($response, true);

// Check if the API request was successful
if (isset($response['ResponseCode']) && $response['ResponseCode'] == "0") {
    // Get the CheckoutRequestID and the CustomerMessage from the API response
    $checkout_request_id = $response['CheckoutRequestID'];
    $customer_message = $response['CustomerMessage'];
    // Redirect the user to the MPESA checkout page
    header("Location: https://api.safaricom.co.ke/mpesa/stkpush?businessShortCode=$shortcode&password=$password&timestamp=$timestamp&transactionType=CustomerPayBillOnline&amount=$amount&partyA=$phone_number&partyB=$shortcode&phoneNumber=$phone_number&callBackURL=$callback_url&accountReference=Your%20Company%20Name&transactionDesc=Payment%20for%20goods%20and%20services&checkoutRequestID=$checkout_request_id");
} else {
    // The API request failed, display an error message
    echo "An error occurred: " . $response['errorMessage'];
}<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/user/initiatepayment.blade.php ENDPATH**/ ?>