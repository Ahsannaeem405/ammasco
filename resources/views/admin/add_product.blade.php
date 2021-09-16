@extends('../layout/main')
@section('tittle') 
Add Product
@endsection

@section('body_content') 
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
    	<div class="row">
    		<div class="col-md-6 offset-md-3">
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

    			<div class="card" style="">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-colored-form-control">Add Product</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">

						

						 <form method="POST" enctype="multipart/form-data" action="{{ url('admins/save_product') }}">
                            @csrf
							<div class="form-body">
								

								
								<div class="form-group">
									<label for="userinput5">Name</label>
									<input class="form-control border-primary" type="text" placeholder="Product Name" id="userinput5" name="name">
								</div>
								<div class="form-group">
									<label for="userinput5">Sku</label>
									<input class="form-control border-primary" type="text" placeholder="Product Sku" id="userinput5" name="sku">
								</div>
								<div class="form-group">
									<label for="userinput5">Image</label>
									<input class="form-control border-primary" type="file" placeholder="Product Name" id="userinput5" name="file">
								</div>
								<div class="form-group">
									<label for="userinput5">Price</label>
									<div class="input-group mt-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">₦</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)" name="price">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
								</div>
								

								

								

								<div class="form-group">
									<label for="userinput8">Description</label>
									<textarea id="userinput8" rows="5" class="form-control border-primary" name="dis" placeholder="Description"></textarea>
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

@endsection