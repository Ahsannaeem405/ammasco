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
                            <h4 class="card-title">Manager</h4>
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
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $k=0; @endphp
                                            @foreach($user2 as $row_user)
                                            @php ++$k; @endphp
                                            <tr>
                                                <td class="text-truncate">{{$row_user->name}}</td>
                                                <td class="text-truncate">
                                                    {{$row_user->email}}
                                                    
                                                </td>
                                                
                                                 <td class="text-truncate">
                                                    <a href="{{url('admins/edit_manager/' .$row_user->id)}}">
                                                        <button type="button" class="btn btn-outline-blue blue block btn-md">
                                                        Edit
                                                        </button>
                                                    </a>
                                                    

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