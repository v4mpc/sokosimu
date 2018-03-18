@extends('layouts.app',['title'=>'View','page_header'=>$customer->name,'optional_description'=>' last updated '.$customer->updated_at])
@section('content')



<div class="row">
	<div class="col-md-8">

		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-customer-img img-responsive img-circle" src="{{asset('img/avatar.png')}}" alt="Cstomer profile picture">

				<h3 class="profile-customername text-center">{{$customer->name}}</h3>

				<p class="text-muted text-center">Software Engineer</p>

				<ul class="list-group list-group-unbordered">
					<li class="list-group-item">
						<b>Followers</b>
						<a class="pull-right">1,322</a>
					</li>
					<li class="list-group-item">
						<b>Following</b>
						<a class="pull-right">543</a>
					</li>
					<li class="list-group-item">
						<b>Friends</b>
						<a class="pull-right">13,287</a>
					</li>
				</ul>

				<div class="margin">
					<a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">
						<span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>Edit
					</a>
					<a href="{{route('customers.destroy',$customer->id)}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
						<span>
							<i class=" fa fa-trash " aria-hidden="true "></i>
						</span>Delete</a>
					<form action="{{route( 'customers.destroy',$customer->id)}}" id="delete-form" method="POST"> {{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">

					</form>



				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->


		@endsection