@extends('../../layout/user')
@section('link')
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Product</title>
    <link rel="apple-touch-icon" href="{{asset('app_asset/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app_asset/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/extensions/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/forms/icheck/icheck.css')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/extensions/noui-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/core/colors/palette-noui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/ecommerce-shop.css')}}">
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
                <h3 class="content-header-title mb-0 d-inline-block">Shops</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Shop
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
           
        </div>
          @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
      @php
        Session::forget('success');
      @endphp
  </div>
  @endif
        <div class="content-detached content-right">
            <div class="content-body" style="margin-left: 0px;">
                <div class="product-shop">
                    <div class="card">
                        <div class="card-body">
                            <span class="shop-title">Products</span>
                            
                        </div>
                    </div>
                    @php $pro=App\Models\product::all(); @endphp
                    <div class="row match-height">
                        @foreach($pro as $row)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">

                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="{{url('user/product_dt/' .$row->id)}}">
                                            <div class="product-img d-flex align-items-center">
                                               
                                                <img class="img-fluid mb-1" src="{{url('upload/images/' .$row->file)  }}" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">{{$row->name}}</h4>
                                            <p>

                                            {{Str::limit($row->dis, 60)}}</p>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">${{$row->price}}</span>
                                                    
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            
                                            

                                             <a  href="{{url('user/add_too_cart/' .$row->id)}}">
                                                        <i class="la la-shopping-cart">
                                                        </i>
                                                        Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection