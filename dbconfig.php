<?php 
// Subscription plans 
$plans = array( 
    '1' => array( 
        'name' => 'Weekly Subscription', 
        'price' => 25, 
        'interval' => 'week' 
    ), 
    '2' => array( 
        'name' => 'Monthly Subscription', 
        'price' => 80, 
        'interval' => 'month' 
    ), 
    '3' => array( 
        'name' => 'Yearly Subscription', 
        'price' => 850, 
        'interval' => 'year' 
    ) 
); 
 
//Currency code
$currency = "usd";  
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_51ORm9tSCzTQlSWpYPtTQmSkKwuxT3ziuYERaFXrxsfpiIo1E57Gk9HHqZiusyWUay03pW3QieMHhzxAv9W3mezOH00E67kL5xv');  //STRIPE_API_KEY – Specify the API Secret key.
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51ORm9tSCzTQlSWpYrwtpCbrB7yxApfDHplxFk8i9OVDAJhXcvvbQVhSi5KJiB95lkiVhFdWbE7LttB8SJRvNe67900HsxVOjD1'); //STRIPE_PUBLISHABLE_KEY – Specify the API Publishable key.
  
// Database configuration  


define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'ifixdev'); 
define('DB_PASSWORD', 'VjF2JQ@!jGZx5v0c'); 
define('DB_NAME', 'stripe4');
 
// Connect with the database  
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
  
// Display error if failed to connect  
if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}

?>
 

