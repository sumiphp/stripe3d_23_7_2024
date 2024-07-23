
<?php 
// Include configuration file  
require_once 'dbconfig.php'; 
 
// Get user ID from current SESSION 
$userID = isset($_SESSION['loggedInUserID'])?$_SESSION['loggedInUserID']:1; 
 
$payment_id = $statusMsg = $api_error = ''; 
$ordStatus = 'error'; 
 
// Check whether stripe token is not empty 
//if(!empty($_POST['subscr_plan']) && !empty($_POST['stripeToken'])){ 

    if( !empty($_POST['stripeToken'])){ 
     
    // Retrieve stripe token, card and user info from the submitted form data 
    $token  = $_POST['stripeToken']; 
    $name = $_POST['name1']; 
    $email = $_POST['email1']; 
    $card_number = preg_replace('/\s+/', '', $_POST['card_number1']); 
    $card_exp_month = $_POST['card_exp_month1']; 
    $card_exp_year = $_POST['card_exp_year1']; 
    $card_cvc = $_POST['card_cvc1']; 
     
    // Plan info 
    //$planID = $_POST['subscr_plan']; 
    //$planInfo = $plans[$planID]; 
    //$planName = $planInfo['name']; 
    //$planPrice = $planInfo['price']; 
    //$planInterval = $planInfo['interval']; 
     
    // Include Stripe PHP library 
    //require_once 'stripe-php/init.php'; 
    $planName='Donation';
    $planPrice=$_POST['finalprice1'];

    require_once 'stripe/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
     
    // Add customer to stripe 
    $customer = \Stripe\Customer::create(array( 
        'email' => $email, 
        'source'  => $token,
             //'confirm' => True,
  //'payment_method' => 'pm_card_visa',
        //"payment_method" => ['card'],
        //'payment_method_types[]'=> "card", 
        //'payment_method_configuration
        //' => 'pmc_1OSAgZSCzTQlSWpYHkvQ46vu',
    )); 
     
    // Convert price to cents 
    $priceCents = round($planPrice*100); 
     
    // Create a plan 
    $planInterval='week';
    //$currency='GBP';
    try { 
        $plan = \Stripe\Plan::create(array( 
            "product" => [ 
                "name" => $planName 
            ], 
            "amount" => $priceCents, 
            "currency" => $currency, 
            "interval" => $planInterval, 
            "interval_count" => 1,
       

           // "payment_method_types" => ['card'],
        )); 
    }catch(Exception $e) { 
        $api_error = $e->getMessage(); 
       //$api_error ="Please check your card details";
    } 
     
    if(empty($api_error) && $plan){ 
        // Creates a new subscription 
        try { 
            $subscription = \Stripe\Subscription::create(array( 
                "customer" => $customer->id, 
                "items" => array( 
                    array( 
                        "plan" => $plan->id, 
                    ), 
                ), 
            )); 
        }catch(Exception $e) { 
            //$api_error = $e->getMessage(); 
            $api_error ="Please check your card details1";
        } 
         
        if(empty($api_error) && $subscription){ 
            // Retrieve subscription data 
            $subsData = $subscription->jsonSerialize(); 
           //print_r($subsData);
           //die;
     
            // Check whether the subscription activation is successful 
            if(($subsData['status'] == 'active') || ($subsData['status'] =='incomplete')){ 
                // Subscription info 
               /* $subscrID = $subsData['id']; 
                $custID = $subsData['customer']; 
                $planID = $subsData['plan']['id']; 
                $planAmount = ($subsData['plan']['amount']/100); 
                $planCurrency = $subsData['plan']['currency']; 
                $planinterval = $subsData['plan']['interval']; 
                $planIntervalCount = $subsData['plan']['interval_count']; 
                $created = date("Y-m-d H:i:s", $subsData['created']); 
                $current_period_start = date("Y-m-d H:i:s", $subsData['current_period_start']); 
                $current_period_end = date("Y-m-d H:i:s", $subsData['current_period_end']); 
                $status = $subsData['status']; 
                     
               
                $sql = "INSERT INTO user_subscriptions_details (user_id,stripe_subscription_id,stripe_customer_id,stripe_plan_id,plan_amount,plan_amount_currency,plan_interval,plan_interval_count,payer_email,created,plan_period_start,plan_period_end,status) VALUES('".$userID."','".$subscrID."','".$custID."','".$planID."','".$planAmount."','".$planCurrency."','".$planinterval."','".$planIntervalCount."','".$email."','".$created."','".$current_period_start."','".$current_period_end."','".$status."')"; 
                $insert = $db->query($sql);  
                  
            
                if($insert && !empty($userID)){  
                    $subscription_id = $db->insert_id;  
                    $update = $db->query("UPDATE users SET subscription_id = {$subscription_id} WHERE id = {$userID}");  
                } 
                 
                $ordStatus = 'success'; */
                $statusMsg = 'Your Donation Payment has been Successful!'; 
            }else{ 
                $statusMsg = "Donation Payment failed!"; 
            } 
        }else{ 
           // $statusMsg = "Donation Payment failed! ".$api_error; 
           $statusMsg = "Donation Payment failed! "; 
        } 
    }else{ 
        //$statusMsg = "Donation Payment failed! ".$api_error; 
        $statusMsg = "Donation Payment failed! "; 
    } 
}else{ 
    $statusMsg = "Error on form submission, please try again."; 
} 
echo $statusMsg;
?>

