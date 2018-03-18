@extends('layouts.app',['title'=>'Create','page_header'=>'Add Customer','optional_description'=>'create new App Customer'])@section('content')







<div class="container-fluid">

		

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
								<div class="header">
										<h2>
											Product Details
											
										</h2>
										<ul class="header-dropdown m-r--5">
											
										</ul>
									</div>
							

<div class="body">
							<div class="row clearfix">
								<div class="col-lg-6">


										<div id="aniimated-thumbnials">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<a href="{{asset('images/'.$product->featuredImage1)}}">
												  <img class="img-responsive" src="{{asset('images/'.$product->featuredImage1)}}" />
												</a>
											</div>

											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
												@if (!empty($product->featuredImage2))
												<a href="{{asset('images/'.$product->featuredImage2)}}">
													<img class="img-responsive" src="{{asset('images/'.$product->featuredImage2)}}" />
												  </a>
												@endif
													
												</div>
												@if (!empty($product->featuredImage3))
												<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
														<a href="{{asset('images/'.$product->featuredImage3)}}">
														  <img class="img-responsive" src="{{asset('images/'.$product->featuredImage3)}}" />
														</a>
													
													</div>

													@endif


													@if (!empty($product->featuredImage4))
													<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
															<a href="{{asset('images/'.$product->featuredImage4)}}">
															  <img class="img-responsive" src="{{asset('images/'.$product->featuredImage4)}}" />
															</a>
															
														</div>
														@endif
														@if (!empty($product->featuredImage5))
														<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
																<a href="{{asset('images/'.$product->featuredImage5)}}">
																  <img class="img-responsive" src="{{asset('images/'.$product->featuredImage5)}}" />
																</a>
															</div>

															@endif
												
											
											  </div>
										  
										  




								</div>
								<div class="col-lg-6"><h1>{{$product->name}}</h1>
								<hr>
							

								<p>{{$product->description}}</p>
								<br>

								<h3 >Category </h3>
							
									<h3><span class="label label-primary">{{$product->category->name}}</span></h3>


									<br>

									<h3 >Price </h3>
								<h3 class="font-bold col-teal">Tsh {{$product->price}}</h3>
								
								</div>
								
							</div>
							
						</div>
							</div> 
					
						</div>
				
		
		
		
		
		</div>
		
		
		
	
	

@endsection	





