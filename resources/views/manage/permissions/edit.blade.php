@extends('layouts.manage')

@section('content')
  <div class="flex-container m-l-25">
      <header class="row">
        <h1 class="title m-l-30">View Permission Details</h1>
      </header> <!-- end of column -->
    <hr class="m-t-0">

    <div class="form">
    <div class="form-wrapper">
    <form action="{{route('permissions.update', $permissions->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PUT')}}

        <div class="form-group">
          <label for="display_name" class="control-label">Name (Display Name)</label>        
          <input type="text" class="form-control" name="display_name" id="display_name" value="{{$permissions->display_name}}">  
        </div>
  
        <div class="form-group">
         <label for="name" class="control-label">Slug <small>(Cannot be changed)</small></label>        
         <input type="text" class="form-control" name="name" id="name" value="{{$permissions->name}}" disabled>        
        </div>

        <div class="form-group">
          <label for="description" class="control-label">Description</label>
          <input type="text" class="form-control" name="description" id="description" placeholder="Describe what this permission does" value="{{$permissions->description}}">
        </div>

        <div class="button">
          <button class="btn btn-primary pull-right m-r-0">Save Changes</button>
          <a class="btn btn-warning fa fa-caret-left pull-left" href="{{route('permissions.index')}}"> Back</a> 
        </div>
    </form>
  </div>
</div>
</div>
@endsection
