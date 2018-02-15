@extends('layouts.manage')

@section('content')
  <div class="flex-container">
     <header class="row">
        <h1 class="title m-l-30">View Permission Details</h1>
      </header> <!-- end of row -->

      <div class="row pull-right">
        <a href="{{route('permissions.edit', $permissions->id)}}" class="btn btn-md btn-primary m-r-20"><i class="fa fa-edit m-r-10"></i> Edit Permission</a>
      </div>
    <hr class="m-t-0">

    <div class="show-content">
        <div>
            <strong>{{$permissions->display_name}}</strong>
        </div>
        <div>
          <small>{{$permissions->name}}</small>
        </div>
        <div>
            {{$permissions->description}}
        </div>
    </div>
    <div>
      <a class="btn btn-warning fa fa-caret-left pull-left m-t-5" href="{{route('permissions.index')}}"> Back</a>   
    </div>
  </div>
@endsection
