@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
			<div class="col-md-10 col-md-offset-2 col-sm-6">
				<h1 class="title m-l-30">View Admin Details</h1>			
			</div> <!-- end of .column -->

			<div class="col-md-2 col-sm-4">
				<a href="{{route('admins.edit', $admin->id)}}" class="btn btn-primary m-r-40"><i class="fa fa-user m-r-10"></i> Edit Admin</a>
			</div>
</div> <!-- end of .row -->
		<hr class="m-t-0">

		<div class="col-md-10 col-md-offset-2 col-sm-10 flex-container">
					<div class="">
						<label class="label"><strong>Name</strong></label>
						<div>
							<p>{{$admin->name}}</p>
						</div>
					</div>

					<div class="">
						<label class="label"><strong>Email</strong></label>
						<div>
							<p>{{$admin->email}}</p>
						</div>
					</div>

					<div class="">
						<label class="label"><strong>Roles</strong></label>
						<ul>
							@foreach ($admin->roles as $role)
								<li>{{$role->display_name}} ({{$role->description}})</li>							
							@endforeach
						</ul>
					</div>
		</div>

		<div>
			<a class="btn btn-warning fa fa-caret-left pull-left m-l-30 m-t-10" href="{{route('admins.index')}}"> Back</a>		
		</div>
@endsection