@extends('../layout/main')
@section('tittle') 
Approve User
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
                <h4 class="card-title">User</h4>
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
                                @php $k=0;
                                
                                
                                                            
                                 @endphp
                                @foreach($user2 as $row_user)
                                @php ++$k; @endphp
                                <tr>
                                    <td class="text-truncate">{{$row_user->name}}</td>
                                    <td class="text-truncate">
                                        {{$row_user->email}}
                                        
                                    </td>
                                    <td class="text-truncate">{{$row_user->zone->zone_name}}</td>
                                    <td class="text-truncate">
                                        <button type="button" class="btn btn-outline-blue blue block btn-md" data-toggle="modal" data-target="#slideInDown{{$k}}">
                                            Update Limit
                                        </button>
                                         <div class="modal animated slideInDown text-left" id="slideInDown{{$k}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel77" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel77">upadate</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST" enctype="multipart/form-data" action="{{ url('admins/update_limit') }}">
                                                    @csrf 
                                                    <div class="modal-body">

                                                       
                                                        <h2 class="mb-2"><b>Product Monthly Limit</b></h2>

                                                        <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="user_id" value="{{$row_user->id}}">
                                                        
                                                        @php $data=array();
                                                        @endphp

                                                            @foreach($row_user->limt as $row_pro)

                                                            @php
                                                            $data[]=$row_pro->pro_id;
                                                            @endphp
                                                           
                                                            <div class="form-group row">
                                                                <label class="col-md-5 label-control">{{$row_pro->pro->name}} </label>
                                                                <div class="col-md-7 mx-auto"> 
                                                                <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="id[]" value="{{$row_pro->id}}">
                                                                 <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="p_id[]" value="0">
                                                                <input type="number" placeholder="Enter Monthly Limit" class="form-control" style="padding-right: 0px;"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="mon_limit[]" value="@if($row_pro->mon_limit==null){{0}}@else{{$row_pro->mon_limit}}@endif">
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                            @php 
                                                             $pro=App\Models\product::all();
                                                           
                                                            @endphp

                                                            @foreach($pro as $row_pr)
                                                            
                                                            @php
                                                            $check=1;
                                                            for($m=0 ; $m<count($data); $m++)
                                                            {

                                                                    if($row_pr->id == intval($data[$m]))
                                                                    {
                                                                        $check=0;
                                                                    }
                                                            }
                                                           


                                                           
                                                             @endphp
                                                           
                                                            @if($check==1)
                                                            <div class="form-group row">
                                                                <label class="col-md-5 label-control">{{$row_pr->name}} </label>
                                                                <div class="col-md-7 mx-auto"> 
                                                                <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="p_id[]" value="{{$row_pr->id}}">
                                                                <input type="hidden" placeholder="Enter Monthly Limit" class="form-control"  name="id[]" value="0">
                                                                <input type="number" placeholder="Enter Monthly Limit" class="form-control" style="padding-right: 0px;"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="mon_limit[]" value="0">
                                                                </div>
                                                            </div>
                                                            @endif
                                                            
                                                            @endforeach

                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline-primary">Update</button>
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