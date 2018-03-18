@extends('layouts.app',['title'=>'Create','page_header'=>'Add Customer','optional_description'=>'create new App Customer'])@section('content')







<div class="container-fluid">

		<div class="row clearfix">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							 <div class="header">
								<h2>
									NEW PRODUCT INFOMATION
								</h2>
								<ul class="header-dropdown m-r--5">
									
								</ul>
							</div>
							<div class="body">
								<form class="form-horizontal myForm" action="{{route('products.update',$product->id)}}" method="post"  enctype="multipart/form-data">
										<input type="hidden" name="_method" value="PATCH">
									{{csrf_field()}}

									
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
											<label for="email_address_2">Name</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
											<div class="form-group">
												<div class="form-line">
													<input id="email_address_2" class="form-control" value="{{$product->name}}" name="name" placeholder="Enter Product Name" type="text">
												</div>
											</div>
										</div>
									</div>
					
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
											<label for="email_address_2">Category</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
											<div class="form-group">
												<div class="form-line">
													<select class="selectpicker" name="category_id">
														@foreach ($categories as $category)
														<option value="{{$category->id}}">{{$category->name}}</option>
														@endforeach
												
													  </select></div>
												</div>
											</div>
										</div>
									
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
											<label for="email_address_2">Price(Tshs)</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
											<div class="form-group">
												<div class="form-line">
													<input id="email_address_2" class="form-control" value="{{$product->price}}" name="price" placeholder="Enter Product Price" type="text">
												</div>
											</div>
										</div>
									</div>

									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
											<label for="email_address_2">Description</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
											<div class="form-group">
												<div class="form-line">
													<textarea rows="3" class="form-control no-resize" name="description" placeholder="Please describe the product...">{{$product->description}}</textarea>
												</div>
											</div>
										</div>
									</div>

									

									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
											<label for="email_address_2">Images</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
											<div class="form-group">
												<div class="form-line">
													<input id="email_address_2" class="form-control" name="file[]" placeholder="Enter Product Price" type="file" multiple>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                                    </div>
									

								

									
									
					
									
								</form>
					
							
							</div> 
					
							{{--  <form method="post" action="{{route('dropzone.fileupload')}}"
							class="dropzone"
							id="my-awesome-dropzone">
							{{ csrf_field() }}</form>  --}}
						</div>
					</div>
		
		
		
		
		</div>
		
		
		
	
	

@endsection	
