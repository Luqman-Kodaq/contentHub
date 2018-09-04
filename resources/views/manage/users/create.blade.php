@extends('layouts.manage')

@section('content')
	<div class="row m-t-50">
	<div class="col-md-10 col-md-offset-2 col-sm-10">
	<div class="flex-container m-l-25">
		<div class="row">
			<h2 class="title m-l-30">Create New Users</h2>
		</div>
		<hr class="m-t-0">

		<div class="form">
			<div class="form-wrapper">
				<form action="{{route('users.store')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="name" class="label-control">Name:</label>						
						<input type="text" name="name" class="form-control" id="name" :value="{{ old('name')}}" placeholder="Enter your name...">
					</div>
					
					<div class="form-group">
						<label for="email" class="control-label">Email:</label>						
						<input type="text" name="email" class="form-control" id="email" value="{{ old('email')}}" placeholder="Enter your email...">
						<small>Your email is confidential with us</small>
					</div>
					
					<!-- Password checkbox -->
					<div id="check" class="form-group">
            		<label for="password" class="control-label">Password:</label>
            		<input type="password" class="form-control" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
              		<b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>

              		<br>

              		<!-- Roles Checkbox -->
              		<div>
          			<label for="role" class="control-label">Roles</label>
		  			<input type="hidden" name="roles" :value="rolesSelected" />

		        				
					<div class="form-group">
		      				@foreach ($roles as $role)
		   				<div class="form-group">
		   					<b-checkbox name="rolesSelected" v-model="rolesSelected" :value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
		   				</div>
		      				@endforeach
					</div>
					</div>
          			</div>

		          	<div class="button">
					<button class="btn btn-md btn-success fa fa-user-plus pull-right"> Create New User</button>			
					<a class="btn btn-warning btn-md fa fa-caret-left pull-left" href="{{route('users.index')}}"> Back</a>
					</div>

					<div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection

@section('scripts')

<script>
 var app = new Vue({
  el: '#check',
    data: {
        auto_password: false,
        rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
        }
    });
</script>

@stop