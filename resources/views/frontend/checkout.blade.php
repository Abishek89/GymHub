<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GymHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    @section('main-section')
        <section class="shop-section spad">
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                  <h2 class="h3 mb-3 text-black">Billing Details</h2>
                  <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                      <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                      <select id="c_country" class="form-control">
                        <option value="1">Select a country</option>    
                        <option value="2">bangladesh</option>    
                        <option value="3">Algeria</option>    
                        <option value="4">Afghanistan</option>    
                        <option value="5">Ghana</option>    
                        <option value="6">Albania</option>    
                        <option value="7">Bahrain</option>    
                        <option value="8">Colombia</option>    
                        <option value="9">Dominican Republic</option>    
                      </select>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_fname" name="c_fname">
                      </div>
                      <div class="col-md-6">
                        <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_lname" name="c_lname">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_companyname" class="text-black">Company Name </label>
                        <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                      </div>
                    </div>
      
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                      </div>
                      <div class="col-md-6">
                        <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                      </div>
                    </div>
      
                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                      </div>
                      <div class="col-md-6">
                        <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="c_order_notes" class="text-black">Order Notes</label>
                      <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-12">
                      <h2 class="h3 mb-3 text-black">Your Order</h2>
                      <div class="p-3 p-lg-5 border">
                        <table class="table site-block-order-table mb-5">
                          <thead>
                            <th>Product</th>
                            <th>Total</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                              <td>$250.00</td>
                            </tr>
                            <tr>
                              <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                              <td>$100.00</td>
                            </tr>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                              <td class="text-black">$350.00</td>
                            </tr>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                              <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                            </tr>
                          </tbody>
                        </table>
      
                        <div class="border p-3 mb-3">
                          <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Khalti Money Transfer</a></h3>
      
                          <div class="collapse" id="collapsebank">
                            <div class="py-2">
                              <p class="mb-0">Make your payment directly into our Khalti. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                          </div>
                        </div>
      
                        <div class="form-group">
                          <p><a href="{{ route('thankyou') }}" class="btn btn-primary btn-lg py-3 btn-block">Place Order</a></p>
                        </div>
      
                      </div>
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