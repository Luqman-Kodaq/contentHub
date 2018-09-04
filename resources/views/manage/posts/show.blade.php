@extends('layouts.manage')

@section('content')
<div class="row">
				@foreach($posts as $post)
					<div class="col-md-10 col-md-offset-2 col-sm-10 flex-container">
						<p>{{$post->content}}</p>
					</div>
				@endforeach
<div>
			<a class="btn btn-warning fa fa-caret-left pull-left m-l-30 m-t-10" href="{{route('posts.index')}}"> Back</a>		
		</div>
	</div>							
@endsection