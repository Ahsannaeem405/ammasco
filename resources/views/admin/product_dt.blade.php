@extends('../../layout/main')
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
        <div class="content-detached content-right">
            <div class="content-body" style="margin-left: 0px;">
                <div class="card">
                        <div class="card-body">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <div class="product-img d-flex align-items-center">
                                            
                                            <img alt="Card image cap" class="img-fluid mb-1" src="{{url('upload/images/' .$user->file)  }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-12">
                                        <div class="title-area clearfix">
                                            <h2 class="product-title float-left">
                                               {{$user->name}}
                                            </h2>
                                            
                                        </div>
                                        <div class="price-reviews clearfix">
                                            <span class="price-box">
                                                <span class="price h4">
                                                    ${{$user->price}}
                                                </span>
                                              </span>
                                            
                                        </div>
                                        <!-- Product Information -->
                                        <div class="product-info">
                                            <p>
                                                {{$user->dis}}
                                            </p>
                                        
                                                
                                        </div>
                                        <!-- Product Information Ends-->
                                        <!-- Color Options -->
                                        
                                        <!-- Color Options Ends-->
                                        <!-- Size Options Ends-->
                                        <div class="row">
                                            
                                            
                                            <div class="col-xl-5 col-lg-5 col-md-12 offset-xl-7">
                                                <div class="product-buttons pl-2">
                                                   
                                                    <a class="btn btn-info btn-sm" href="{{url('admins/product_edit/' .$user->id)}}" style="width: 100%;">
                                                        <i class="la la-flash">
                                                        </i>
                                                        Edit
                                                    </a>
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