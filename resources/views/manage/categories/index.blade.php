@extends('layouts.manage')

@section('content')	
<div class="row m-t-50">
	<div class="col-md-7 col-sm-7">
		<h1 class="title m-l-30">Manage Categories</h1>
	</div>
	<div class="col-md-5 col-sm-5">
		<a href="{{route('categories.create')}}" class="btn btn-md btn-primary admin-create"><i class="fa fa-user-plus m-r-10"></i> Create New Category</a>
	</div>
		<table class="table">
		<thead>
		<tr>
		<th>id</th>
		<th>Name</th>
		<th>Date Created</th>
		<th></th>
		</tr>
		</thead>

		<tbody>
		@foreach ($categories as $category)
		<tr>
		<th>{{$category->id}}</th>
		<td>{{$category->name}}</td>
		<td>{{$category->created_at->toFormattedDateString()}}</td>
		<!-- <td><a class="btn btn-light btn-sm m-r-40" href="{{route('categories.edit', $category->id)}}">Edit</a></td> -->
		</tr>
		@endforeach
		</tbody>
		</table>
		</div>
	</div>
</div>
@stop