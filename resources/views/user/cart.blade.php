@extends('../../layout/user')
@section('link')
 <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <title>Cart</title>
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
                <h3 class="content-header-title mb-0 d-inline-block">Shopping Cart</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Shopping Cart
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="content-body">
            <div class="shopping-cart">

               
                
                
           
                @if(isset($arr1))
                @foreach($arr1 as $row)
                <div class="alert alert-success">
                
                {{$row['prod']}} 
                
                </div>
                @endforeach
                @endif


                 @if(isset($arr))
                @foreach($arr as $row)
                <div class="alert alert-danger">
                
                Alert!!{{$row['product']}} 
                
                </div>
                @endforeach
                @endif
               
                <div class="tab-content pt-1">
                    <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true" aria-labelledby="shopping-cart">
                        <form method="POST" enctype="multipart/form-data" action="{{url('user/cart_update')}}">
                        @csrf
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Details</th>
                                                    <th>No. Of Products</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($user as $row_user)    
                                                <tr>
                                                    <td>
                                                        <div class="product-img d-flex align-items-center">
                                                            <img class="img-fluid" src="{{url('upload/images/' .$row_user->pro->file)  }}" alt="Card image cap">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-title">{{$row_user->pro->name}}</div>
                                                        
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="id[]" value="{{$row_user->id}}">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="text" class="text-center count touchspin form-control" name="qty[]" value="{{$row_user->qty}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="total-price">₦{{$row_user->pro->price}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action">
                                                            <a href="{{url('user/del_cat/' .$row_user->id)}}"><i class="ft-trash-2" onclick="return confirm('Are you sure you want to delete this item')"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card" >
                                    <div class="card-header">
                                        <h4 class="card-title">Price Details</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            @php $sum=0; @endphp
                                             @foreach($user as $row_user) 
                                             @php
                                                $qty=$row_user->pro->price * $row_user->qty;

                                                $sum=$sum+$qty; @endphp
                                             
                                            <div class="price-detail">{{$row_user->pro->name}} ({{$row_user->qty}})<span class="float-right">₦{{$row_user->pro->price * $row_user->qty}}</span></div>
                                            @endforeach
                                            <hr>
                                            <strong>
                                            <div class="price-detail">Total ({{count($user)}})<span class="float-right">₦{{$sum}}</span></div></strong>
                                            <div class="total-savings">
                                                <div class="text-right">
                                                @if(count($user)!=null)    
                                                    <button type="submit" class="btn btn-info">Update Cart</button>
                                                    

                                                @endif    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        
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

    <script src="https://js.paystack.co/v1/inline.js"></script> 
<script type="text/javascript">
var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'pk_test_4cb21644d3480c84ef8dfb07f4bbb5abc2cf819c', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: 'YOUR_REFERENCE', // Replace with a reference you generated
    callback: function(response) {
      //this happens after the payment is completed successfully
      var reference = response.reference;
      alert('Payment complete! Reference: ' + reference);
      // Make an AJAX call to your server with the reference to verify the transaction
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}
</script>
    @endsection    
