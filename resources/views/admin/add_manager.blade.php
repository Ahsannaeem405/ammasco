@extends('../layout/main')
@section('tittle') 
Add Manager
@endsection

@section('body_content') 
<style type="text/css">
    .container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">

                                   

                                    <form class="form form-horizontal form-bordered" method="POST" action="{{ url('admins/register_manager') }}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group row mx-auto">
                                                <label class="col-md-3 label-control" for="timesheetinput1">First Name</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="First Name" name="f_name">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">
                                                <label class="col-md-3 label-control" for="timesheetinput1">Last Name</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="Last Name" name="l_name">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                           

                                            <div class="form-group row mx-auto">
                                                <label class="col-md-3 label-control" for="timesheetinput1">User Name</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="User Name" name="email">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">
                                                <label class="col-md-3 label-control" for="timesheetinput1">Password</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="Password" id="timesheetinput1" class="form-control" placeholder="Password" name="password">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">
                                                <label class="col-md-3 label-control" for="timesheetinput1">Permissions:</label>
                                                <div class="col-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Dashboard
                                                            <input type="checkbox" name="dashboard">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Add Product
                                                            <input type="checkbox" name="add_product" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Edit Product
                                                            <input type="checkbox" name="edit_product">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="form-group row mx-auto">   
                                                <div class="col-md-3 offset-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">View Order
                                                            <input type="checkbox" name="view_order">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Send verfication Mail
                                                            <input type="checkbox" name="mail">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Approve User
                                                            <input type="checkbox" name="approve_user">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">    
                                                <div class="col-md-3 offset-md-3">
                                                    <div class="position-relative has-icon-left">
                                                        <label class="container">Pending User
                                                            <input type="checkbox" name="pending_user">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                           
                                            
                                        </div>

                                        <div class="form-actions text-right">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>

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

