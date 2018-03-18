@extends('layouts.app',['title'=>'Customers','page_header'=>'Customers','optional_description'=>$customers->count().' Customers
Registered']) @section('content')



		<div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
							<div>
									<p>Taken from wikpedia</p>
									<img src="data:image/png;base64,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" alt="Red dot" />
								</div> 	
						
                        <div class="header">
                            <h2>
                                All APP USERS
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('customers.create')}}" type="button" class="btn btn-primary waves-effect">Add New Customer</a>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
					<th>Customername</th>
					<th>email</th>
					<th>Date Joined</th>
					<th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
				<tr>
					<td>{{$customer->id}}</td>
					<td>{{$customer->name}}</td>
					<td>{{$customer->email}}</td>
					<td> {{$customer->created_at}}</td>
					<td>
						
						


								<a href="{{route('customers.show',$customer->id)}}" class="btn btn-default waves-effect">
										<i class="material-icons" aria-hidden="true">remove_red_eye</i>
									</a>

								<a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">
									<span>
										<i class="material-icons" aria-hidden="true">mode_edit</i>
									</span></a>

									<div class="btn-group">
											<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												More <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0);" class=" waves-effect waves-block">Send Email</a></li>
												<li><a href="javascript:void(0);" class=" waves-effect waves-block">Send Notification</a></li>
												
												<li role="separator" class="divider"></li>
												<li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
											</ul>
										</div>



				</tr>

				@endforeach
                                </tbody>
							</table>
							{{$customers->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
           
                    </div>


		@endsection