<?php
require_once "configold1.php";

//echo PAYMENT_CURRENCY;
//die;

define('RETURN_URL', 'http://localhost/stripe3d/confirmold1.php');

if (isset($_POST['stripeToken']) && !empty($_POST['stripeToken'])) {



 
    $response = $gateway->authorize([
        'amount' =>5,
        'currency' => PAYMENT_CURRENCY,
        'description' => 'This is a X purchase transaction.',
        'token' => $_POST['stripeToken'],
        'returnUrl' => RETURN_URL,
        'confirm' => true,
        //'name' => $_POST['name'],
        //'email' =>$_POST['email'],
        //'description' =>'Donation'.' ,Customer : '.$_POST['name'].' ,Email : '.$_POST['email'].' ,Phone : '.$_POST['phone'], 

        "address" => ["city" => "hyd", "country" => "India", "line1" => "adsafd werew", "postal_code" => "500090", "state" => "telangana"]
,
        
    ])->send();

    if($response->isSuccessful()) {
        $response = $gateway->capture([
           // 'amount' => $_POST['amount'],
           'amount' =>5,
            'currency' => PAYMENT_CURRENCY,
           // 'name' => $_POST['name'],
        //'email' =>$_POST['email'],
            'paymentIntentReference' => $response->getPaymentIntentReference(),
        ])->send();

        $arr_payment_data = $response->getData();

        // Insert transaction data into the database
        $db = new DB();
        $db->insert_payment_details(
            array(
                "payment_id" => $arr_payment_data['id'],
                //"amount" => $_POST['amount'],
                'amount' =>5,
                'currency' => PAYMENT_CURRENCY,
                'payment_status' => $arr_payment_data['status'],
            )
        );

        $_SESSION['payment_id'] = $arr_payment_data['id'];
        header('Location: indexold1.php#pay');
    } elseif($response->isRedirect()) {
        $_SESSION['amount'] = $_POST['amount'];
        $response->redirect();
    } else {
        $_SESSION['payment_error'] = $response->getMessage();
        header('Location: indexold1.php#pay');
        #div3
    }
}

?>