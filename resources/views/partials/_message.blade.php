 @if (session('status'))
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>
		<i class="icon fa fa-check"></i> Success</h4>
	{{session('status')}}
</div>
@endif @if ($errors->all())
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>
		<i class="icon fa fa-ban"></i> Error</h4>
	@foreach ($errors->all() as $error)
	<li>{{$error}}</li>

	@endforeach
</div>
@endif