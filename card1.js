var stripe1 = Stripe(publishable_key);

//ealert(publishable_key);
 
// Create an instance of Elements.
var elements1 = stripe1.elements();
//var elements1 = stripe.elements();
 
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        border: '1px solid #000 !important',
        borderradius: '5px',
        fontSize: '18px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};
 
// Create an instance of the card Element.
var card1 = elements1.create('card', {style: style});
//var card1 = elements1.create('card', {style: style});
 
// Add an instance of the card Element into the `card-element` <div>.
//card1.mount('#card-element11');

card1.mount('#card-element1');
 
// Handle real-time validation errors from the card Element.
card1.addEventListener('change', function(event1) {
    var displayError1 = document.getElementById('card-errors');
    if (event1.error) {
        displayError1.textContent = event1.error.message;
    } else {
        displayError1.textContent = '';
    }
});



// Handle form submission.
var form1 = document.getElementById('payment-form1');
form1.addEventListener('submit', function(event2) {
    event2.preventDefault();
 
    stripe1.createToken(card1).then(function(result1) {
        if (result1.error) {
            // Inform the user if there was an error.
            var errorElement1 = document.getElementById('card-errors');
            errorElement1.textContent = result1.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler1(result1.token);
        }
    });
});
 
// Submit the form with the token ID.
function stripeTokenHandler1(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form1 = document.getElementById('payment-form1');
    var hiddenInput1 = document.createElement('input');
    hiddenInput1.setAttribute('type', 'hidden');
    hiddenInput1.setAttribute('name', 'stripeToken');
    hiddenInput1.setAttribute('value', token.id);
    form1.appendChild(hiddenInput1);
 
    var finalprice1=$('#finalprice1').val();
    var email1=$('#email1').val();
    var phone1=$('#phone1').val();
    var name1=$('#name1').val();
 
    // Submit the form
    if ((finalprice1!='') && (email1!='') && (phone1!='') && (name1!='')){
    form1.submit();
    }
}