<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Stripe Payment</title>
   <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
   <h1>Stripe Payment Example</h1>
   <form id="payment-form">
      <div>
         <label for="card-element">
            Credit or debit card
         </label>
         <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
         </div>
         <!-- Used to display form errors. -->
         <div id="card-errors" role="alert"></div>
      </div>
      <button type="submit">Submit Payment</button>
   </form>

   <script>
      var stripe = Stripe('pk_test_51NvIdGAMvf7wNKEmcnFjEibDO7zIlmGjqpQySuw3rlkVZ3EtBGdpOq7e5fONqkJRuebNoqtg1kmVbP5xXwQtHDbc00ESNGsphc');
      var elements = stripe.elements();

      var card = elements.create('card');
      card.mount('#card-element');

      var form = document.getElementById('payment-form');

      form.addEventListener('submit', function(event) {
         event.preventDefault();

         stripe.createToken(card).then(function(result) {
            if (result.error) {
               var errorElement = document.getElementById('card-errors');
               errorElement.textContent = result.error.message;
            } else {
               stripeTokenHandler(result.token);
            }
         });
      });

      function stripeTokenHandler(token) {
         fetch('/charge', {
            method: 'POST',
            headers: {
               'Content-Type': 'application/json',
            },
            body: JSON.stringify({ token: token.id }),
         })
         .then(response => response.json())
         .then(data => {
            console.log('Success:', data);
            alert('Payment successful!');
         })
         .catch(error => {
            console.error('Error:', error);
            alert('Payment failed. Please try again.');
         });
      }




      
   </script>
</body>
</html>
