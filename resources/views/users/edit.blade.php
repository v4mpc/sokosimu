@extends('layouts.app',['title'=>'View','page_header'=>$customer->name,'optional_description'=>' last updated '.$customer->updated_at])
@section('content')


<div class="col-md-6">
	<!-- general form elements -->
	<div class="box box-primary">
		<div class="box-header with-border">
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form method="post" action="{{route('customers.update',$customer->id)}}">

			{{method_field('PUT')}} {{ csrf_field() }}
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="name" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="{{$customer->name}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="" value="{{$customer->email}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				</div>


			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	<!-- /.box -->
	@endsection