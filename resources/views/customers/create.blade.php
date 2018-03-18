@extends('layouts.app',['title'=>'Create','page_header'=>'Add Customer','optional_description'=>'create new App Customer'])@section('content')






	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
				CREATE NEW APP USER
				</h2>
			
			</div>
			<div class="body">
				<form class="form-horizontal" method="post" action="{{route('customers.store')}}">
						{{ csrf_field() }}
						<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="name">Name</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input id="name" class="form-control" name="name" placeholder="Enter  name" type="text">
										</div>
									</div>
								</div>
							</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="email_address_2">Email Address</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input id="email_address_2" class="form-control" placeholder="Enter email address" name="email" type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Password</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input id="password_2" class="form-control" placeholder="Enter your password" name="password" type="password">
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