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
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="logo" src="{{asset('logo.png')}}" style="width:100%;">
                            
                        </a></li>
                    
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                      
                           

                             
                    </ul>

                    @php  $user =App\Models\User::whereNull('email_verified_at')->where('role','3')->get(); @endphp
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>@if(Auth::user()->pending_user=='on')
                             @if(count($user)!=0)
                            <span class="badge badge-pill badge-danger badge-up badge-glow">
                            
                            {{count($user)}} 
                            
                            </span>
                            @endif
                            @endif

                            </a>

                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                @if(Auth::user()->pending_user=='on')
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">@if(count($user)!=0) {{count($user)}} New @endif</span>
                                    </li>
                                    @php $l=0; @endphp
                                    @foreach($user as $row)
                                    @php $l++; @endphp
                                    <li class="scrollable-container media-list w-100 ps">
                                        <a href="{{url('admins/user')}}">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">New User!</h6>
                                                    <p class="notification-text font-small-3 text-muted">{{$row->name}} waiting for your approval</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @if($l==5)
                                    @break
                                    @endif
                                    @endforeach    

                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"  href="{{url('admins/user')}}">Read all notifications</a></li>
                                @endif    


                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">{{Auth::user()->name}}</span><span class="avatar avatar-online"><img src="{{asset('p.png')}}" alt="avatar"><i></i></span></a>
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
                @if(Auth::user()->dashboard=='on')
                <li class="nav-item"><a href="{{url('admins/')}}"><i class="la la-th-large"></i><span class="menu-title" data-i18n="Shop">Dashboard</span></a>
                @endif    
                       

                </li>
                <li class="nav-item has-sub "><a href=""><i class="la la-list"></i><span class="menu-title" data-i18n="Product Detail">Product</span></a>
                    <ul class="menu-content" style="">
                        @if(Auth::user()->add_product=='on')    
                            <li class=""><a class="menu-item" href="{{url('admins/add_product')}}"><i></i><span data-i18n="Users List">Add Product</span></a>
                            </li>
                        @endif
                        
                        <li class=""><a class="menu-item" href="{{url('admins/view_product')}}"><i></i><span data-i18n="Users View">View Product</span></a>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->view_order=='on')
                <li class=" nav-item"><a href="{{url('admins/order')}}"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="Order">Order</span></a>
                </li>
                 <li class=" nav-item"><a href="{{url('admins/order_repoort')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="Order">Report</span></a>
                </li>
                @endif
                <li class="nav-item has-sub"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="Users">Users</span></a>
                    <ul class="menu-content" style="">
                    @if(Auth::user()->pending_user=='on')    
                        <li class=""><a class="menu-item" href="{{url('admins/user')}}"><i></i><span data-i18n="Users List">Pending Users</span></a>
                        </li>
                    @endif
                    @if(Auth::user()->approve_user=='on')    
                        <li class=""><a class="menu-item" href="{{url('admins/approve_user')}}"><i></i><span data-i18n="Users View">Approve Users</span></a>
                        </li>
                        
                    @endif   
                        
                    </ul>
                </li>
                
                @if(Auth::user()->manager=='on')
                <li class="nav-item has-sub"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="Users">Manager</span></a>
                    <ul class="menu-content" style="">
                        <li class=""><a class="menu-item" href="{{url('admins/add_manager')}}"><i></i><span data-i18n="Users List">Add Manager</span></a>
                        </li>
                        <li class=""><a class="menu-item" href="{{url('admins/manager')}}"><i></i><span data-i18n="Users View">View Manager</span></a>
                        </li>
                        
                       
                        </li>
                    </ul>
                </li>
                @endif
               
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
</body>
<!-- END: Body-->

</html>