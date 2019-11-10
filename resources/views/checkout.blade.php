
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://js.stripe.com/v3"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="content">
<div class="container col-sm-8">
        <div class="card">
	
                <div class="card-header">
                    
                    Pay with your cards
                </div>
        
                <div class="card-body">
                    
                    <form action="/charge" method="post" id="payment-form">
                        {{csrf_field()}}
                            
                            <div class="form-group">
                                <label for="title">Credit Card details</label>              
                                <div  id="card-element" class="form-group" >
                                
                                    {{-- stripe elelment here --}}
                                    
            
                                </div>
                            </div>
                            
                            <div class="form-group">
                                    <div id="card-errors" role="alert"></div>                                
                            </div>
                        
                            <div class="form-group">
                                <div class="col-3 ">
                                    <button type="submit" class="form-control btn btn-info">Submit Payment</button>
                                </div>
                                
                            </div>
                         
                        </div>
           
        
                            
                    </form>
        
                </div>
        
        </div>

</div>
        
        
</div>












<style>
#card-element{
    margin:10px
}
.content{
    margin-top: 300px;
}

</style>




<script>

    // Create a Stripe client.
    var stripe = Stripe('pk_test_Am1rSmMbdVVPlJxCtpPPTDSM002GMS53im');

// Create an instance of Elements.
    var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
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
    var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

// Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
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
                // 

                // Submit the form
                form.submit();
                }



</script>
