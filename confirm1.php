





<?php
require_once "config.php";
//define('RETURN_URL', 'http://localhost/stripe3d/confirm1.php');
define('RETURN_URL','http://clactonmosque.com/confirm1.php');

$response = $gateway->confirm([
    'paymentIntentReference' => $_GET['payment_intent'],
    'returnUrl' => RETURN_URL,
])->send();

if($response->isSuccessful()) {
    $response = $gateway->capture([
        'amount' => $_SESSION['amount'],
        'currency' => PAYMENT_CURRENCY,
        'paymentIntentReference' => $_GET['payment_intent'],
        

    ])->send();

    $arr_payment_data = $response->getData();

    // Insert transaction data into the database
    $db = new DB();
    $db->insert_payment_details(
        array(
            "payment_id" => $arr_payment_data['id'],
            "amount" => $_SESSION['amount'],
            'currency' => PAYMENT_CURRENCY,
            'payment_status' => $arr_payment_data['status'],
            'name'=> $_SESSION['sessname'],
        'email'=> $_SESSION['sessemail'],
        'phoneno'=> $_SESSION['sessphone'],
        'message'=>$_SESSION['sessmessage'],
        )
    );

    $_SESSION['payment_id1'] = $arr_payment_data['id'];
    header('Location: index.php#pay1');
} else {
    $_SESSION['payment_error1'] = $response->getMessage();
    header('Location: index.php#pay1');
}