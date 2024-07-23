

When a customer authenticates their card for a transaction, control goes to the confirm.php which then is responsible to capture the payment.



<?php
require_once "configold1.php";
define('RETURN_URL', 'http://localhost/stripe3d/confirmold1.php');

$response = $gateway->confirm([
    'paymentIntentReference' => $_GET['payment_intent'],
    'returnUrl' => RETURN_URL,
])->send();

if($response->isSuccessful()) {
    $response = $gateway->capture([
        //'amount' => $_SESSION['amount'],
        'amount' =>5,
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
        )
    );

    $_SESSION['payment_id'] = $arr_payment_data['id'];
    header('Location: indexold1.php#pay');
} else {
    $_SESSION['payment_error'] = $response->getMessage();
    header('Location: indexold1.php#pay');
}