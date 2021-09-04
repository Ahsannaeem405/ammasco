@extends('../../layout/user')
@section('link')
 <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/ecommerce-cart.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/forms/checkboxes-radios.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
@endsection    
@section('body_content') 
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Checkout</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Checkout
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="content-body">
            <div class="shopping-cart">
                @if(Session::has('success'))
                <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
                </div>
                @endif
                
                   
                <div class="tab-content pt-1">
                    

                



               
                        
                        <div class="tab-pane active" id="checkout-tab" aria-expanded="true" role="tablist" aria-labelledby="checkout">
                            <div class="row">
                                <div class="col-md-4 order-md-2 mb-4">
                                    <div class="card">
                                        <div class="card-header mb-3">
                                            <h4 class="card-title">Your cart (4)</h4>
                                        </div>
                                        <div class="card-content">
                                            <ul class="list-group mb-3">
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Fitbit Alta HR Special Edition x 1</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$250</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Mackbook pro 19'' x 1</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$1150</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">VR Headset x 2</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$700</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Smart Watch with LED x 1</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$700</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span class="product-name"><strong>Cart Subtotal</strong></span>
                                                    <span class="product-price"><strong>$2800</strong></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div class="text-success">
                                                        <h6 class="my-0">Promo code</h6>
                                                        <small>EXAMPLECODE</small>
                                                    </div>
                                                    <span class="text-success">-$200</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span class="product-name">Shipping &amp; Handling</span>
                                                    <span class="product-price">$100</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span class="product-name">TAX / VAT</span>
                                                    <span class="product-price">$0</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span class="product-name success">Order Total</span>
                                                    <span class="product-price">$2700</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <form class="card p-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Promo code">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-secondary">Redeem</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-8 order-md-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Paystack Info</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form id="paymentForm">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="firstName">First name</label>
                                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                            <div class="invalid-feedback">
                                                                Valid first name is required.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="lastName">Last name</label>
                                                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                            <div class="invalid-feedback">
                                                                Valid last name is required.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" id="amount" required / value="20">


                                                    <div class="mb-3">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email-address" class="form-control" placeholder="you@example.com" required / >
                                                        
                                                        <div class="invalid-feedback">
                                                            Please enter a valid email address for shipping updates.
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="mb-3">
                                                        <label for="address2">Address<span class="text-muted">(Optional)</span></label>
                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                    </div>

                                                    
                                                        <button type="submit" class="btn btn-info" onclick="payWithPaystack()"> Pay </button>

                                                </form>
                                                <script src="https://js.paystack.co/v1/inline.js"></script> 
<script type="text/javascript">
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_xxxxxxxxxx', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}
</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
</div> 




@endsection    
@section('footer_link') 


<script src="{{asset('app_asset/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app_asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app_asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app_asset/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app_asset/js/scripts/pages/ecommerce-cart.js')}}"></script>

    
    @endsection    
