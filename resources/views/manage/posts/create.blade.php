@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
<div class="col-md-10 col-md-offset-2 col-xs-7">
	<h1 class="m-l-20">Add New Blog Post</h1>
</div>
</div> <!-- end of .row -->
<hr class="m-t-0 m-r-40">

<form action="{{route('posts.store')}}" method="post">
<div class="row">
	<div class="col-md-8 col-sm-12">
			{{csrf_field()}}
		<div id="post" class="form-group">
			<!-- Title -->
			<div class="form-group">
				<input type="text" name="title" class="form-control" placeholder="Post Title" v-model="title">
			</div>

			<!-- Slug -->
			<div class="form-group">
			<slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>
            <input type="hidden" v-model="slug" name="slug" />
			</div>

			<!-- Excerpt -->
			<div class="form-group">
				<textarea class="form-control" placeholder="Excerpt..." name="excerpt" rows="3"></textarea>
			</div>


			<!-- Content -->
			<div class="form-group">
				<textarea class="form-control" placeholder="Compose your masterpiece..." rows="20" name="content"></textarea>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-sm-12">
		<div class="card w-100">
			<img src="https://placehold.it/50x50" alt="" class="card-img-top">
			<hr>
			<div class="card-body">
				<h5 class="card-title" name="author_id">{{Auth::user()->name}}</h5>
				<h6 class="card-subtitle text-muted">{{Auth::user()->email}}</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

				<div class="status-details">
					<h4><span class="status-emphasis">Draft</span> Saved</h4>
					<p>A Few Minutes Ago</p>
				</div>
			</div>

			<div class="form-group">
			<button class="btn btn-success btn-sm ml-2">Publish</button>
			<a href="#" class="btn btn-light btn-sm pull-right mr-2">Save Draft</a>
			</div>
		</div>
	</div>
</div>
</form>


@endsection

@section('scripts')
<script>
	var app = new Vue({
		el: '#post',
		data: {
        title: '',
        slug: '',
				api_token: '{{Auth::user()->api_token}}'
			},
		methods: {
			updateSlug: function(val) {
				this.slug = val;
			},
	        slugCopied: function(type, msg, val) {
	          notifications.toast(msg, {type: `${type}`});
	      }
		}
	});
</script>
@endsection
