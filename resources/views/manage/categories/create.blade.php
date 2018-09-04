@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center login-row">
        <div class="">
            <div id="loginForm" class="col-md-12 col-sm-12 card">
                <div class="login-header">
                <h3 class="">Create New Category</h3>
                </div>

                <div class="card-body login-body">
                    <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-12 col-sm-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('email') }}" placeholder="Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
