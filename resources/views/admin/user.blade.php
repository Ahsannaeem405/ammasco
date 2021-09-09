@extends('../layout/main')
@section('tittle') 
Pending Product
@endsection

@section('body_content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
      @php
        Session::forget('success');
      @endphp
  </div>
  @endif
            <!-- eCommerce statistic -->
           
            <!--/ eCommerce statistic -->

            <!-- Products sell and New Orders -->
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Waiting For Approval</h4>
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
                                    <table id="new-orders-table" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Zone</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $k=0; @endphp
                                            @foreach($user as $row_user)
                                            @php ++$k; @endphp
                                            <tr>
                                                <td class="text-truncate">{{$row_user->name}}</td>
                                                <td class="text-truncate">
                                                    {{$row_user->email}}
                                                    
                                                </td>
                                                <td class="text-truncate">{{$row_user->zone->zone_name}}</td>
                                                 <td class="text-truncate">
                                                    <button type="button" class="btn btn-outline-blue blue block btn-md" data-toggle="modal" data-target="#slideInDown{{$k}}">
                                                        Approve
                                                    </button>
                                                     <div class="modal animated slideInDown text-left" id="slideInDown{{$k}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel77" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel77">Approve</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form method="POST" enctype="multipart/form-data" action="{{ url('admins/approve') }}">
                                                                @csrf 
                                                                <div class="modal-body">

                                                                   
                                                                    <h2 class="mb-2"><b>Product Monthly Limit</b></h2>

                                                                    <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="user_id" value="{{$row_user->id}}">
                                                                    @foreach($pro as $row_pro)
                                                                    <label>{{$row_pro->name}} </label>
                                                                    <div class="form-group">
                                                                         
                                                                         <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="pro_id[]" value="{{$row_pro->id}}">
                                                                        <input type="number" placeholder="Enter Monthly Limit" class="form-control" style="padding-right: 0px;"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="mon_limit[]">
                                                                    </div>
                                                                    @endforeach
                                                                   
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-outline-primary">Approve</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
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
                </div>
            </div>
            
          
        </div>
    </div>
</div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection