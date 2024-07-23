var stripe2 = Stripe(publishable_key);

//ealert(publishable_key);
 
// Create an instance of Elements.
var elements2 = stripe2.elements();
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
var card2 = elements2.create('card', {style: style});
//var card1 = elements1.create('card', {style: style});
 
// Add an instance of the card Element into the `card-element` <div>.
//card1.mount('#card-element11');

card2.mount('#card-element2');
 
// Handle real-time validation errors from the card Element.
card2.addEventListener('change', function(event2) {
    var displayError2 = document.getElementById('card-errors');
    if (event2.error) {
        displayError2.textContent = event2.error.message;
    } else {
        displayError2.textContent = '';
    }
});



// Handle form submission.
var form2 = document.getElementById('payment-form');
form2.addEventListener('submit', function(event3) {
    event3.preventDefault();
 
    stripe2.createToken(card1).then(function(result2) {
        if (result2.error) {
            // Inform the user if there was an error.
            var errorElement2 = document.getElementById('card-errors');
            errorElement2.textContent = result2.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler2(result2.token);
        }
    });
});
 
// Submit the form with the token ID.
function stripeTokenHandler2(token2) {
    // Insert the token ID into the form so it gets submitted to the server
    var form2 = document.getElementById('payment-form2');
    var hiddenInput2 = document.createElement('input');
    hiddenInput2.setAttribute('type', 'hidden');
    hiddenInput2.setAttribute('name', 'stripeToken');
    hiddenInput2.setAttribute('value', token2.id);
    form2.appendChild(hiddenInput2);
 
    var finalprice=$('#finalprice').val();
    var email=$('#email').val();
    var phone=$('#phone').val();
    var name=$('#name').val();
 
    // Submit the form
    if ((finalprice!='') && (email!='') && (phone!='') && (name!='')){
    form.submit();
    }
}