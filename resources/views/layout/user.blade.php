<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
 @section("link")     
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('tittle','Admin pannel')</title>
    <link rel="apple-touch-icon" href="{{asset('app_asset/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app_asset/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->

      <!-- BEGIN: Vendor CSS-->
    
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    
   
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
  


    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/fonts/meteocons/style.css')}}">
    
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
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/dashboard-ecommerce.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/animate/animate.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
     

    <!-- END: Custom CSS-->
@show

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
@section("head")    
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="logo" src="app_asset/images/logo/log.png">
                            <h3 class="brand-text">LOGO</h3>
                        </a></li>
                    
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                      
                           

                             
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="app_asset/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

@show
    <!-- BEGIN: Main Menu-->
@section("side")
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                
                <li class="nav-item"><a href="{{url('user/')}}"><i class="la la-list"></i><span class="menu-title" data-i18n="Product Detail">Shop</span></a>
                     
                </li>
                <li class=" nav-item"><a href="{{url('user/cart')}}"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="Shopping Cart">Shopping Cart</span></a>
                </li>
                <li class=" nav-item"><a href="{{url('user/check_out')}}"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="Checkout">Checkout</span></a>
                </li>
                <li class=" nav-item"><a href="{{url('user/order')}}"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="Order">Order</span></a>
                </li>
                
               
            </ul>
        </div>
    </div>
@show
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
@yield("body_content")

@section("footer")    

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">WEBSITE</a></span></p>
    </footer>
    <!-- END: Footer-->

@section("footer_link")   
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app_asset/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app_asset/vendors/js/charts/chartist.min.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app_asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app_asset/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app_asset/js/scripts/pages/dashboard-ecommerce.js')}}"></script>





    <script src="{{asset('app_asset/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app_asset/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/modal/components-modal.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/pages/ecommerce-product-details.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('app_asset/vendors/js/forms/icheck/icheck.min.js')}}"></script>
@show
    <!-- END: Page JS-->
@show
</body>
<!-- END: Body-->

</html>