@extends('layouts.app',['title'=>'Category','page_header'=>'Customers','optional_description'=>$categories->count().' Customers
Registered']) @section('content')



		<div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All PRODUCTS CATEGORY
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('categories.create')}}" type="button" class="btn btn-primary waves-effect">Add New Category</a>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
					<th>Category Name</th>
					<th>Category Image</th>
					<th>Created at</th>
					<th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->email}}</td>
					<td> {{$category->created_at}}</td>
					<td>
						
						


								<a href="{{route('categories.show',$category->id)}}" class="btn btn-default waves-effect">
										<i class="material-icons" aria-hidden="true">remove_red_eye</i>
									</a>

								<a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">
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
            <!-- #END# Basic Table -->
           
                    </div>


		@endsection