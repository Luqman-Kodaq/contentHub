@extends('layouts.manage')

@section('content')	
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-11 col-lg-offset-4">
<div class="flex-container m-l-25">	
		<div>
			<h1 class="title m-l-30">Manage Users</h1>
			<a href="{{route('users.create')}}" class="btn btn-md btn-primary pull-right m-r-10"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
		<table class="table">
			<thead>
			<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Date Created</th>
					<th></th>
			</tr>
			</thead>

			<tbody>
				@foreach ($users as $user)
				<tr>
					<th>{{$user->id}}</th>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at->toFormattedDateString()}}</td>
					<td class="pull-right m-r-5"><a class="btn btn-success btn-sm m-r-5" href="{{route('users.show', $user->id)}}">View</a> <a class="btn btn-secondary btn-sm" href="{{route('users.edit', $user->id)}}">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>		
		<div class="text-center">
		{{$users->links()}}	
		</div>
</div>
</div>
@stop