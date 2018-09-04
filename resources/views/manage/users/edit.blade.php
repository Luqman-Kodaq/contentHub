@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
<div class="col-md-10 col-md-offset-2 col-sm-10">
	<div class="flex-container m-l-25">
		<h1 class="title m-l-30">Edit User</h1>
		<hr class="m-t-0">

		<div class="form">
			<div class="form-wrapper">
				<form action="{{route('users.update', $user->id)}}" method="POST">
					{{method_field('PUT')}}
					{{csrf_field()}}
						<div class="thumbnail-content">
							<div class="form-group">
								<label for="name" class="control-label">Name</label>
								<div>
									<input type="text" name="name" class="form-control" id="name" value="@if (old('name')){{old('name')}} @else{{$user->name}} @endif">
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="control-label">Email</label>
								<div>
									<input type="text" name="email" class="form-control" id="email" value="@if (old('email')){{old('email')}} @else{{$user->email}} @endif"">
								</div>
							</div>

							<div id="select" class="form-group">
					            <label for="password" class="control-label">Password</label>
					            <b-radio-group v-model="password_options">
					              <div class="form-group">
					                <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
					              </div>
					              <div class="form-group">
					                <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
					              </div>
					              <div class="form-group">
					                <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
					                <div>
					                  <input type="text" class="form-control" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
					                </div>
					              </div>
					            </b-radio-group>

					            <label for="role" class="control-label">Roles</label>
		        				<input type="hidden" name="roles" :values="rolesSelected" />

		        				
		        				<div class="form-group">
		        				@foreach ($roles as $role)
		        				<div id="select" class="form-group">
		        					<b-checkbox name="rolesSelected" v-model="rolesSelected" value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
		        				</div>
		        				@endforeach
		        				</div>    
		        			</div>
		        		</div><!-- end of .column -->

						<div class="button">
						<button class="btn btn-md btn-success pull-right">Edit User</button>
						<a class="btn btn-warning fa fa-caret-left pull-left" href="{{route('users.index')}}"> Back</a>	
						</div>		      
				</form>
			</div>
		</div> <!-- end of .column -->
	</div>
</div>
</div>
@endsection

@section('scripts')
  <script>

    var app = new Vue({
      el: '#select',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });

  </script>
@endsection