@extends('layouts.app',['title'=>'Users','page_header'=>'Users','optional_description'=>$users->count().' Users
Registered']) @section('content')
<div class="box">
	<div class="box-header">
		<div>




			<a href="{{route('users.create')}}" class="btn btn-default">
				<span>
					<i class="fa fa-user-plus" aria-hidden="true"></i>
				</span> Add User
			</a>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>email</th>
					<th>Date Joined</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td> {{$user->created_at}}</td>
					<td>
				


							<div class="margin">


								<a href="#" class="btn btn-default">
									<span>
										<i class="fa fa-eye" aria-hidden="true"></i>
									</span>View</a>

								<a href="#" class="btn btn-primary">
									<span>
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</span>Edit</a>

								<div class="btn-group">
									<button type="button" class="btn btn-success">More</button>
									<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
												<span>
													<i class="fa fa-bell" aria-hidden="true"></i>
												</span>Send Notification</a>
										</li>
										<li>
											<a href="#">
												<span>
													<i class="fa fa-envelope" aria-hidden="true"></i>
												</span>Send Email</a>
										</li>
									</ul>
								</div>



				</tr>

				@endforeach

			</tbody>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>email</th>
					<th>Date Joined</th>
					<th></th>
				</tr>
			</tfoot>
		</table>
		</div>
		<!-- /.box-body -->
		</div>
		<!-- /.box -->









		<div class="container-fluid">
            <div class="block-header">
                <h2>NORMAL TABLES</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC TABLES
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
										<th>USERNAME</th>
										<th>ACTION</th>
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
						



								<a href="{{route('users.show',$user->id)}}" class="btn btn-default">
									<span>
										<i class="fa fa-eye" aria-hidden="true"></i>
									</span>View</a>

								<a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">
									<span>
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</span>Edit</a>

								<div class="btn-group">
									<button type="button" class="btn btn-success">More</button>
									<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
												<span>
													<i class="fa fa-bell" aria-hidden="true"></i>
												</span>Send Notification</a>
										</li>
										<li>
											<a href="#">
												<span>
													<i class="fa fa-envelope" aria-hidden="true"></i>
												</span>Send Email</a>
										</li>
									</ul>
								</div>



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