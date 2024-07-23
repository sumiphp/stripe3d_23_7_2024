<?php
session_start();

require_once "vendor/autoload.php";
require_once "class-db.php";

use Omnipay\Omnipay;
/*Indian*/
/*define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51ORm9tSCzTQlSWpYrwtpCbrB7yxApfDHplxFk8i9OVDAJhXcvvbQVhSi5KJiB95lkiVhFdWbE7LttB8SJRvNe67900HsxVOjD1');
define('STRIPE_SECRET_KEY', 'sk_test_51ORm9tSCzTQlSWpYPtTQmSkKwuxT3ziuYERaFXrxsfpiIo1E57Gk9HHqZiusyWUay03pW3QieMHhzxAv9W3mezOH00E67kL5xv');
define('PAYMENT_CURRENCY','INR');*/



/*define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51OUfcrKwOPan7dju91dYHNqQx8Zq7R3qYA4d820SMEixaQIUGRsmHaVoVhzaaqj0Et46dJ2Q0qLXBaMCIHQztenC00A8TJI9JV');
define('STRIPE_SECRET_KEY', 'sk_test_51OUfcrKwOPan7dju0EFk0hjnfcSasJB0oSWz4Iwb0wAFkXtrPTBc24Gsrjyr0Xu8SgvKOfd8Uq3YodasxzOzWcf200BUjTV9bX');
define('PAYMENT_CURRENCY','USD');*/
//define('RETURN_URL', 'DOMAIN_URL/confirm.php');

define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51OUtsQJyTnJ5j9RcWcelEmSL1sHfeXfo8h15oPbGVqQLcaNQyrzx4YUVXmYDcticdKARLLpNAmRZj9ns1yUJaZ9d00FtOf2tTt');
define('STRIPE_SECRET_KEY', 'sk_test_51OUtsQJyTnJ5j9RcoPHktxSQGT6wemOiiRADzYdm7r3rNyHA1y4fIsNfriF8MWqbyDYbaIL3eke15XSuJ6wfY9ht00b2hMoet0');
define('RETURN_URL', 'http://localhost/stripe3d/confirm.php');


define('PAYMENT_CURRENCY','GBP');
$gateway = Omnipay::create('Stripe\PaymentIntents');
$gateway->setApiKey(STRIPE_SECRET_KEY);

?>