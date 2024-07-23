<?php
require_once 'configold1.php';
?>
<!--link rel="stylesheet" href="style.css" /-->
<script src="https://js.stripe.com/v3/"></script>
<style>
StripeElement {
    box-sizing: border-box;
    
    height: 40px;
    
    padding: 10px 12px;
    
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;
    
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
}
 
.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
}
 
.StripeElement--invalid {
    border-color: #fa755a;
}
 
.StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
}


    </style>

<?php if ( isset($_SESSION['payment_id']) ) { ?>
    <div class="success">
        <strong><?php echo 'Payment is successful. Payment ID is :'. $_SESSION['payment_id']; ?></strong>
    </div>
    <?php unset($_SESSION['payment_id']); ?>
<?php } elseif ( isset($_SESSION['payment_error']) ) { ?>
    <div class="error">
        <strong><?php echo $_SESSION['payment_error']; ?></strong>
    </div>
    <?php unset($_SESSION['payment_error']); ?>
<?php } ?>
<!DOCTYPE html>
<form action="chargeold1.php" method="post" id="payment-form">
    <div class="form-row">
        <input type="text" name="amount" placeholder="Enter Amount" />
        <p><label for="card-element">Credit or debit card</label></p>
        <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>
 
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <p><button>Submit Payment</button></p>
</form>

4000003560000008

<script>
var publishable_key = '<?php echo STRIPE_PUBLISHABLE_KEY; ?>';
</script>
<script src="cardold1.js"></script>





<div class='text-center'> 

<?php if ( isset($_SESSION['payment_id']) ) { ?>
<div class="success">
<strong style='color:green'><h5 style='color:green'><?php echo 'Payment is successful';
// Payment ID is :'. $_SESSION['payment_id']; 

?></h5></strong>
</div>
<?php unset($_SESSION['payment_id']); ?>
<?php } elseif ( isset($_SESSION['payment_error']) ) { ?>
<div class="error">
<strong><?php echo $_SESSION['payment_error']; ?></strong>
</div>
<?php unset($_SESSION['payment_error']); ?>
<?php } ?> </div>