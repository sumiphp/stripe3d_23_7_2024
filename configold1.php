<?php
session_start();

require_once "vendor/autoload.php";
require_once "class-db.php";

use Omnipay\Omnipay;

define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51OUfcrKwOPan7dju91dYHNqQx8Zq7R3qYA4d820SMEixaQIUGRsmHaVoVhzaaqj0Et46dJ2Q0qLXBaMCIHQztenC00A8TJI9JV');
define('STRIPE_SECRET_KEY', 'sk_test_51OUfcrKwOPan7dju0EFk0hjnfcSasJB0oSWz4Iwb0wAFkXtrPTBc24Gsrjyr0Xu8SgvKOfd8Uq3YodasxzOzWcf200BUjTV9bX');
//define('RETURN_URL', 'DOMAIN_URL/confirm.php');
//define('RETURN_URL', 'http://localhost/stripe3d/confirm.php');
//define('PAYMENT_CURRENCY','INR');
define('PAYMENT_CURRENCY','USD');
$gateway = Omnipay::create('Stripe\PaymentIntents');
$gateway->setApiKey(STRIPE_SECRET_KEY);

?>