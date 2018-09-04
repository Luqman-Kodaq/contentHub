@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
<div class="col-md-7 col-sm-7">
	<h1>All Posts</h1>
</div>
<div class="col-md-5 col-sm-5">
		<a href="{{route('posts.create')}}" class="btn btn-primary pull-right m-t-10 m-r-40"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a>
</div>
</div> <!-- end of .row -->
<hr class="m-t-0 m-r-40">

@endsection