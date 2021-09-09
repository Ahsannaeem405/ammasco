@extends('../layout/main')
@section('body_content')
@php
    $count_user=App\Models\User::where('role',3)->count();
    $count_pro=App\Models\product::count();
    $count_zone=App\Models\zone::count();
    $count_order=App\Models\order::count();
    $user =App\Models\User::where('role',3)->take('10')->get();
    $order =App\Models\order::where('status',null)->take('10')->get();


    

@endphp
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info">{{$count_user}}</h3>
                                        <h6>User</h6>
                                    </div>
                                    <div>
                                         <i class="icon-user-follow info font-large-2 float-right"></i>
                                        
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">{{$count_pro}}</h3>
                                        <h6>Product</h6>
                                    </div>
                                    <div>
                                        <i class="icon-social-dropbox warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">{{$count_zone}}</h3>
                                        <h6>Zone</h6>
                                    </div>
                                    <div>
                                        <i class="la la-globe success font-large-2 float-right"></i>
                                       
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">{{$count_order}}</h3>
                                        <h6>Order</h6>
                                    </div>
                                    <div>
                                        <i class="la la-list-alt danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Products sell and New Orders -->
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Orders</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Customers</th>
                                                <th class="border-top-0">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order as $row_order)
                                            <tr>
                                                <td class="text-truncate">{{$row_order->refrecnce_no}}</td>
                                                <td class="text-truncate p-1">
                                                    {{$row_order->name->name}}
                                                </td>
                                                <td class="text-truncate">${{$row_order->total}}</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Products sell and New Orders -->

            <!-- Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent User</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Zone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $row)
                                            <tr>
                                                <td class="text-truncate">{{$row->name}}</td>
                                                <td class="text-truncate p-1">
                                                    {{$row->email}}
                                                </td>
                                                <td class="text-truncate">{{$row->zone->zone_name}}</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent Transactions -->

            <!--Recent Orders & Monthly Sales -->
          
        </div>
    </div>
</div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection