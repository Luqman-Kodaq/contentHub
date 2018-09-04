@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
      <div class="col-md-10 col-md-offset-2 col-sm-4">
        <h1 class="title m-l-30">View Permission Details</h1>
      </div> <!-- end of row -->

      <div class="col-md-2 col-sm-4">
        <a href="{{route('permissions.edit', $permissions->id)}}" class="btn btn-primary pull-right m-t-10 m-r-70"><i class="fa fa-edit m-r-10"></i> Edit Permission</a>
      </div>
    <hr class="m-t-0">

    <div class="col-md-10 col-md-offset-2 col-sm-4 flex-container">
        <div>
            <strong>{{$permissions->display_name}}</strong>
        </div>
        <div>
          <small>{{$permissions->name}}</small>
        </div>
        <div>
            {{$permissions->description}}
        </div>
    <div>
        <a class="btn btn-warning fa fa-caret-left pull-left m-t-10" href="{{route('permissions.index')}}"> Back</a>
    </div>
    </div>    
  </div>
@endsection
