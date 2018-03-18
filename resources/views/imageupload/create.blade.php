@extends('layouts.app',['title'=>'Create','page_header'=>'Add Customer','optional_description'=>'create new App Customer'])@section('content')






	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
		Image string testing
				</h2>
			
			</div>
			<div class="body">
				<form class="form-horizontal" method="post" action="{{route('image.upload')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="name">Category Name</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input id="name" class="form-control" name="image_one"  placeholder="Enter  String" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="name">Category Name</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input id="name" class="form-control" name="image_two"  placeholder="Enter  String" type="text">
										</div>
									</div>
								</div>
							</div>

								<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="name">Category Name</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input id="name" class="form-control" name="image_three"  placeholder="Enter  String" type="text">
										</div>
									</div>
								</div>
							</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="email_address_2">api_token</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input id="email_address_2" class="form-control" name="api_token" value="6cfd9d8519d8ac10a0f251c9b768b227b2ca019933f7106b1fae80796ad1" type="text">
								</div>
							</div>
						</div>
					</div>
				
			
					<div class="row clearfix">
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
							<button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection