@extends('layouts.manage')

@section('content')
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-11 col-lg-offset-4">
	<div class="flex-container m-l-25">
		<div class="columns m-t-10">
			<div>
				<h1 class="title m-l-30">View User Details</h1>			
			</div> <!-- end of .column -->

			<div class="row pull-right">
				<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary m-r-20"><i class="fa fa-user m-r-10"></i> Edit User</a>
			</div>			
		</div>
		<hr class="m-t-0">

		<div class="show-content">
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
			<a class="btn btn-warning fa fa-caret-left pull-left m-t-10" href="{{route('users.index')}}"> Back</a>		
		</div>

	</div>
</div>
</div>
@endsection