@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
			<div class="col-md-10 col-md-offset-2 col-sm-6">
				<h1 class="title m-l-30">View User Details</h1>			
			</div> <!-- end of .column -->

			<div class="col-md-2 col-sm-4">
				<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary m-r-40"><i class="fa fa-user m-r-10"></i> Edit User</a>
			</div>
</div> <!-- end of .row -->
		<hr class="m-t-0">

		<div class="col-md-10 col-md-offset-2 col-sm-10 flex-container">
					<div class="">
						<label class="label"><strong>Name</strong></label>
						<div>
							<p>{{$user->name}}</p>
						</div>
					</div>

					<div class="">
						<label class="label"><strong>Email</strong></label>
						<div>
							<p>{{$user->email}}</p>
						</div>
					</div>

					<div class="">
						<label class="label"><strong>Roles</strong></label>
						<ul>
							@forelse ($user->roles as $role)
								<li>{{$role->display_name}} ({{$role->description}})</li>
							@empty
							<p>This user has not been assigned any roles yet</p>
							@endforelse
						</ul>
					</div>
		</div>

		<div>
			<a class="btn btn-warning fa fa-caret-left pull-left m-l-30 m-t-10" href="{{route('users.index')}}"> Back</a>		
		</div>
@endsection