@extends('layouts.manage')

@section('content')
  <div class="row m-t-50">
      <div class="col-md-10 col-md-offset-2 col-sm-4">
        <h1 class="title m-l-30">Create New Role</h1>
      </div>

    <div class="col-md-10 col-md-offset-2 col-sm-4 flex-container">
    <hr class="m-t-0">
      <div class="form-wrapper">
    <form action="{{route('roles.store')}}" method="POST">
      {{ csrf_field() }}
                  <h2 class="title">Role Details:</h2>
                  <div class="form-group">
                   <label for="display_name" class="label">Name (Human Readable)</label>
                      <input type="text" class="form-control" name="display_name" value="{{old('display_name')}}" id="display_name">
                   </div>
                  <div class="form-group">
                   <label for="name" class="label">Slug (Can not be edited)</label>
                      <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name">
                   </div>
                  <div class="form-group">
                   <label for="description" class="label">Description</label>
                      <input type="text" class="form-control" value="{{old('description')}}" id="description" name="description">
                   </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                
            <div class="columns">
              <div class="column">
                <div>
                  <article>
                    <div id="app">              
                        <h2 class="title">Permissions:</h2>
                          <b-checkbox-group v-model="permissionsSelected" name="permissions">
                         @foreach ($permissions as $permission)
                            <div class="form-group">
                               <b-checkbox v-model="permissionsSelected" :value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                            </div>
                          @endforeach
                          </b-checkbox-group>         
                    </div>
                  </article>
                </div> <!-- end of .box -->

          <div class="button">
          <button class="btn btn-primary pull-right">Create new Role</button>
          <a class="btn btn-warning btn-md fa fa-caret-left pull-left" href="{{route('roles.index')}}"> Back</a>
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
      permissionsSelected: []
    }
  });

  </script>
@endsection
