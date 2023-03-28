<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GymHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="/shopbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shopbootstrap/css/magnific-popup.css">
    <link rel="stylesheet" href="/shopbootstrap/css/jquery-ui.css">
    <link rel="stylesheet" href="/shopbootstrap/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/shopbootstrap/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="/shopbootstrap/css/aos.css">

    <link rel="stylesheet" href="/shopbootstrap/css/style.css">
    
  </head>
  <body>
  
    @extends('frontend.layout.main')

    @section('content')

        <section class="shop-section spad">  
            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Make a Payment through Khalti </h2>
                    <br>
                    <br>
                    <button id="payment-button" class="btn btn-sm btn-primary" >Pay with Khalti</button>
                     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                     <script>
                        var config = {
                            // replace the publicKey with yours
                            "publicKey": "test_public_key_6b82490dea704f4c84c567a7d30ae7be",
                            "productIdentity": "{{ $enroll->id }}",
                            "productName": "Dragon",
                            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                            "paymentPreference": [
                                "KHALTI",
                                "EBANKING",
                                "MOBILE_BANKING",
                                "CONNECT_IPS",
                                "SCT",
                                ],
                            "eventHandler": {
                                onSuccess (payload) {
                                        // hit merchant api for initiating verfication
                                        $.ajax({
                                            type : 'POST',
                                            url : "{{ route('khalti.verifyPayment') }}",
                                            data: {
                                                token : payload.token,
                                                amount : payload.amount,
                                                "_token" : "{{ csrf_token() }}"
                                            },
                                            success : function(res){
                                                $.ajax({
                                                    type : "POST",
                                                    url : "{{ route('khalti.storePayment') }}",
                                                    data : {
                                                        enroll : payload.product_identity,
                                                        response : res,
                                                        "_token" : "{{ csrf_token() }}"
                                                    },
                                                    success: function(res){
                                                        console.log('transaction successful');
                                                    }
                                                });
                                                console.log(res);
                                            }
                                        });
                                        console.log(payload);
                                    },
                                onError (error) {
                                    console.log(error);
                                },
                                onClose () {
                                    console.log('widget is closing');
                                }
                            }
                        };
                
                        var checkout = new KhaltiCheckout(config);
                        var btn = document.getElementById("payment-button");
                        btn.onclick = function () {
                            // minimum transaction amount must be 10, i.e 1000 in paisa.
                            checkout.show({amount: 1000});
                        }
                    </script>
                    <!-- Paste this code anywhere in you body tag -->
                  </div>
                </div>
              </div>
            </div>
  </section> 
  @endsection

  <script src="/shopbootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="/shopbootstrap/js/jquery-ui.js"></script>
  <script src="/shopbootstrap/js/popper.min.js"></script>
  <script src="/shopbootstrap/js/bootstrap.min.js"></script>
  <script src="/shopbootstrap/js/owl.carousel.min.js"></script>
  <script src="/shopbootstrap/js/jquery.magnific-popup.min.js"></script>
  <script src="/shopbootstrap/js/aos.js"></script>

  <script src="/shopbootstrap/js/main.js"></script>
    
  </body>
</html>





{{-- <html>
<head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
<body>
    <button id="payment-button">Pay with Khalti</button>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
       
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_6b82490dea704f4c84c567a7d30ae7be",
            "productIdentity": "{{ $enroll->id }}",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                        // hit merchant api for initiating verfication
                        $.ajax({
                            type : 'POST',
                            url : "{{ route('khalti.verifyPayment') }}",
                            data: {
                                token : payload.token,
                                amount : payload.amount,
                                "_token" : "{{ csrf_token() }}"
                            },
                            success : function(res){
                                $.ajax({
                                    type : "POST",
                                    url : "{{ route('khalti.storePayment') }}",
                                    data : {
                                        enroll : payload.product_identity,
                                        response : res,
                                        "_token" : "{{ csrf_token() }}"
                                    },
                                    success: function(res){
                                        console.log('transaction successfull');
                                    }
                                });
                                console.log(res);
                            }
                        });
                        console.log(payload);
                    },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    
</body>
</html> --}}