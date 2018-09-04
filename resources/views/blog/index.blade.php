@extends('layouts.app')

@section('title', '| Blog')

@section('content')
<div class="row">
<div class="col-md-12 col-sm-7">
	<h1>All Posts</h1>
</div>
</div> <!-- end of .row -->
<hr class="m-t-0 m-r-40">
@include('_includes._subscribe')
@endsection
