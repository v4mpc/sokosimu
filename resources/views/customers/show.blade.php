@extends('layouts.app',['title'=>'View','page_header'=>$customer->name,'optional_description'=>' last updated '.$customer->updated_at])
@section('content')


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">
		<div class="header">
			<h2>
				Customer Profile
				
			</h2>
			<ul class="header-dropdown m-r--5">
				
			</ul>
		</div>
		<div class="body table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						
						<th>Profile Image</th>
						<td><img src="http://placeimg.com/80/80" alt="profileimage"></td>
						
					</tr>
				</thead>
				<tbody>
					<tr>
					
						<th>Name</th>
						<td>{{$customer->name}}</td>
					
					</tr>
					<tr>
					
						<th>email</th>
						<td>{{$customer->email}}</td>
						
					</tr>
					<tr>
						
						<th>Products Posted</th>
						<td>{{count($customer->products)}}</td>
						
					</tr>
					<tr>
					
						<th>Product Purchased</th>
						<td>0</td>
						
					</tr>
					<tr>
					
						<th>Wishlist Total</th>
						<td>{{count($customer->wishlists)}}</td>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="row">


	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Products Posted
					
				</h2>
				
			</div>
			<div class="body table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
		<th>Name</th>
		<th>Category</th>
		<th>Posted</th>
		<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($customer->products as $product)
	<tr>
		<td>{{$product->id}}</td>
		<td>{{$product->name}}</td>
		<td>{{$product->category->name}}</td>
		<td> {{$product->created_at}}</td>
		<td>
			
			


					<a href="{{route('products.show',$product->id)}}" class="btn btn-default waves-effect">
							<i class="material-icons" aria-hidden="true">remove_red_eye</i>
						</a>

					<a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">
						<span>
							<i class="material-icons" aria-hidden="true">mode_edit</i>
						</span></a>

						



	</tr>

	@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>


	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Wishlist
					
				</h2>
				<ul class="header-dropdown m-r--5">
					
				</ul>
			</div>
			<div class="body table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
		<th>Name</th>
		<th>Category</th>
		<th>Posted</th>
		<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($wishlists as $product)
	<tr>
		<td>{{$product->id}}</td>
		<td>{{$product->name}}</td>
		<td>{{$product->category->name}}</td>
		<td> {{$product->created_at}}</td>
		<td>
			
			


					<a href="{{route('products.show',$product->id)}}" class="btn btn-default waves-effect">
							<i class="material-icons" aria-hidden="true">remove_red_eye</i>
						</a>

					<a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">
						<span>
							<i class="material-icons" aria-hidden="true">mode_edit</i>
						</span></a>

						



	</tr>

	@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	


	



</div>
		@endsection