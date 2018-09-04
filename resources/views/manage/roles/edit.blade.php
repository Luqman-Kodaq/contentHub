@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
    <div class="col-md-10 col-md-offset-2 col-sm-4">
        <h1 class="title m-l-20">Edit {{$role->display_name}}</h1>
    </div>

    <div class="col-md-10 col-md-offset-2 col-sm-4 flex-container">
    <hr class="m-t-0">
    <div class="form-wrapper">
    <form action="{{route('roles.update', $role->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
          <div>
              <div>              
                  <h2 class="title">Role Details:</h2>
                  <div class="form-group">
                      <label for="display_name" class="">Name (Human Readable)</label>
                      <input type="text" class="form-control" name="display_name" value="{{$role->display_name}}" id="display_name">
                  </div>
                  <div class="form-group">                    
                      <label for="name" class="">Slug (Can not be edited)</label>
                      <input type="text" class="form-control" name="name" value="{{$role->name}}" disabled id="name">
                  </div>
                  <div class="form-group">
                      <label for="description" class="">Description</label>
                      <input type="text" class="form-control" value="{{$role->description}}" id="description" name="description">
                  </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">                
              </div>
          </div>

      <div class="columns">
        <div class="column">
          <div>
              <div id="app">              
                  <h2 class="title">Permissions:</h2>
                   @foreach ($permissions as $permission)
                      <div class="form-group">
                         <b-checkbox v-model="permissionsSelected" name="permissions" value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                      </div>
                    @endforeach
              </div>
          </div> <!-- end of .box -->

          <div class="button">
          <button class="btn btn-primary pull-right m-r-0">Save Changes to Role</button>
          <a class="btn btn-warning fa fa-caret-left pull-left" href="{{route('roles.index')}}"> Back</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>
  </div>
@endsection


@section('scripts')
  <script>
  var app = new Vue({
    el: '#app',
    data: {
      permissionsSelected: {!!$role->permissions->pluck('id')!!}
    }
  });

  </script>
@endsection
