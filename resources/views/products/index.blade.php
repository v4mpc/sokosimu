@extends('layouts.app',['title'=>'Product','page_header'=>'Customers','optional_description'=>$products->count().' Customers
Registered']) @section('content')



		<div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All PRODUCTS
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('products.create')}}" type="button" class="btn btn-primary waves-effect">Add New Product</a>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
					<th>Product Name</th>
					<th>Product Category</th>
					<th>Added at</th>
					<th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
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
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
           
                    </div>


		@endsection