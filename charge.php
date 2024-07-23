<?php
require_once "config.php";

//echo PAYMENT_CURRENCY;
//die;

//define('RETURN_URL', 'http://localhost/stripe3d/confirm.php');
define('RETURN_URL','http://clactonmosque.com/confirm.php');

if (isset($_POST['stripeToken']) && !empty($_POST['stripeToken'])) {



 
    $response = $gateway->authorize([
        'amount' => $_POST['amount'],
        'currency' => PAYMENT_CURRENCY,
        //'description' => 'This is a X purchase transaction.',
        'token' => $_POST['stripeToken'],
        'returnUrl' => RETURN_URL,
        'confirm' => true,
        'name' => $_POST['name'],
        'email' =>$_POST['email'],
        'description' =>'Donation'.' ,Customer : '.$_POST['name'].' ,Email : '.$_POST['email'].' ,Phone : '.$_POST['phone'], 

        "address" => ["city" => "hyd", "country" => "India", "line1" => "adsafd werew", "postal_code" => "500090", "state" => "telangana"]
,
        
    ])->send();

    if($response->isSuccessful()) {
        $response = $gateway->capture([
            'amount' => $_POST['amount'],
            'currency' => PAYMENT_CURRENCY,
            'name' => $_POST['name'],
        'email' =>$_POST['email'],
            'paymentIntentReference' => $response->getPaymentIntentReference(),
        ])->send();

        $arr_payment_data = $response->getData();

        // Insert transaction data into the database
        $db = new DB();
        $db->insert_payment_details(
            array(
                "payment_id" => $arr_payment_data['id'],
                "amount" => $_POST['amount'],
                'currency' => PAYMENT_CURRENCY,
                'payment_status' => $arr_payment_data['status'],
                'email'=>$_POST['email'],
                'name'=>$_POST['name'],
                'phone'=>$_POST['phone'],
                'message'=>$_POST['comment'],
            )
        );

        $_SESSION['payment_id'] = $arr_payment_data['id'];
        header('Location: index.php#pay');
    } elseif($response->isRedirect()) {
        $_SESSION['amount'] = $_POST['amount'];
        $_SESSION['sessemail'] = $_POST['email'];
        $_SESSION['sessphone'] = $_POST['phone'];
        $_SESSION['sessname'] = $_POST['name'];
        $_SESSION['sessmessage'] = $_POST['comment'];
        $response->redirect();
    } else {
        $_SESSION['payment_error'] = $response->getMessage();
        header('Location: index.php#pay');
        #div3
    }
}

?>