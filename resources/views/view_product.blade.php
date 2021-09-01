@extends('../layout/main')
@section('link')
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Shops - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
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
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info dropdown-toggle mb-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                    <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                <div class="product-shop">
                    <div class="card">
                        <div class="card-body">
                            <span class="shop-title">Products</span>
                            <span class="float-right">
                                <span class="result-text mr-1"> Showing 12 of 203 results</span>
                                <span class="display-buttons">
                                    <a href="#" class="active"><i class="ft-grid font-medium-2"></i></a>
                                    <a href="#"><i class="ft-list font-medium-2"></i></a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success round">-50%</div>
                                                <img class="img-fluid mb-1" src="{{asset('app_asset/images/elements/07.png')}}" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/fitbit-watch.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/air-jordan.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/13.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/apple-watch.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success badge-right">Sale</div>
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/vr.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/carousel/23.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/carousel/24.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/carousel/26.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/carousel/25.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="app_asset/images/carousel/27.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success">-55%</div>
                                                <img class="img-fluid mb-1" src="app_asset/images/elements/samsung-gear.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$225</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <ul class="pagination justify-content-center pagination-separate pagination-flat">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
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