@extends('layouts.manage')

@section('content')
<div class="flex-container m-t-10">
	<header class="column">
		<h1 class="title m-l-30">{{$role->display_name}}<small class="m-l-25"><em>{{$role->name}}</em></small></h1>
	</header>
	<div class="m-l-30">
		<h5>{{$role->description}}</h5>
	</div>
	<div class="column pull-right">
	<a href="{{route('roles.edit', $role->id)}}" class="btn btn-md btn-primary m-r-20"><i class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
	</div>

	<hr class="m-t-0">
	
	<div class="show-content m-l-20">
		<h2 class="card-title">Permissions:</h2>
		@foreach ($role->permissions as $r)
			<li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
		@endforeach
	</div>
</div>
@endsection