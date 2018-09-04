@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
	<div class="col-md-10 col-md-offset-2 col-sm-4">
		<h1 class="title m-l-30">{{$role->display_name}}<small class="m-l-25"><em>{{$role->name}}</em></small></h1>
		<h5 class="m-l-30">{{$role->description}}</h5>
	</div>
	<div class="col-md-2 col-sm-4">
	<a href="{{route('roles.edit', $role->id)}}" class="btn btn-primary pull-right m-t-10 m-r-70"><i class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
	</div>

	
	
	<div class="col-md-10 col-md-offset-2 col-sm-4">
	<hr class="m-t-0">
	<div class="flex-container">
		<h2 class="card-title">Permissions:</h2>
		<ul>
		@foreach ($role->permissions as $r)
			<li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
		@endforeach
		</ul>
	</div>
	<div class="button">
          <a class="btn btn-warning fa fa-caret-left pull-left m-l-25 m-t-10" href="{{route('roles.index')}}"> Back</a>
    </div>
	</div>	
</div>
@endsection