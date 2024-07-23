var stripe = Stripe(publishable_key);

//alert(publishable_key);
 
// Create an instance of Elements.
var elements = stripe.elements();
//var elements1 = stripe.elements();
 
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
       // color:'blue',
        /*backgroundColor:'#d1d1d1',*/
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        //fontSmoothing: 'antialiased',
        //border: '1px solid black !important',
        borderWidth: 5,
        //borderColor: 'lightgrey',
        borderColor: "green",
      
        borderradius: '35px',
        fontSize: '18px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    },
    ElementsApp:{borderWidth:2,borderColor: "green",
},
    
};
 
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
//var card1 = elements1.create('card', {style: style});
 
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
//card.unmount();
//card1.mount('#card-element1');
 
// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
   // alert();
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});



// Handle form submission.
var form = document.getElementById('payment-form');
  
form.addEventListener('submit', function(event) {
    event.preventDefault();
  //$("#card-element11").hide();
 
    stripe.createToken(card).then(function(result) {

        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});
 
// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
  /* var finalprice=$('#finalprice').val();
    var email=$('#email').val();
    var phone=$('#phone').val();
    var name=$('#name').val();*/
 
   
    //if ((finalprice!='') && (email!='') && (phone!='') && (name!='')){
    form.submit();
    //}
}