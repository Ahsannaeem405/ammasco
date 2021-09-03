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
                @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
      @php
        Session::forget('success');
      @endphp
  </div>
  @endif
                <div class="tab-content pt-1">
                    <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true" aria-labelledby="shopping-cart">
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
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="text" class="text-center count touchspin form-control" value="{{$row_user->qty}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="total-price">${{$row_user->pro->price}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action">
                                                            <a href="{{url('user/del_cat/' .$row_user->id)}}"><i class="ft-trash-2"></i></a>
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
                                             @php  $sum=$sum+$row_user->pro->price; @endphp
                                             
                                            <div class="price-detail">{{$row_user->pro->name}}<span class="float-right">${{$row_user->pro->price}}</span></div>
                                            @endforeach
                                            <hr>
                                            <strong>
                                            <div class="price-detail">Total ({{count($user)}}) <span class="float-right">${{$sum}}</span></div></strong>
                                            <div class="total-savings">
                                                <div class="text-right">
                                                @if(count($user)!=null)    
                                                    <a href="ecommerce-checkout.html" class="btn btn-warning">Place Order</a>
                                                @endif    
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
