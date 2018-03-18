@extends('layouts.app',['title'=>'Create','page_header'=>'Add User','optional_description'=>'create new App User'])@section('content')

<div class="continer-fluid">
<div class="col-md-6">
	<!-- general form elements -->
	<div class="box box-primary">
		<div class="box-header with-border">
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" action="{{route('users.store')}}">
			{{ csrf_field() }}
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name='name' placeholder="Name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name='email' placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Profile Picture</label>
					<input type="file" id="exampleInputFile">

					<p class="help-block">Example block-level help text here.</p>
				</div>

			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>

</div>
	<!-- /.box -->
	@endsection