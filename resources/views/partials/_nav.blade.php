<nav id="navbar-header" class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{route('/')}}">
         <img src="{{asset('images/logo.jpg')}}" alt="E-store Logo" width="30" height="30" />
      </a>
      
      @if (Request::segment(1) == "manage")
      <a class="navbar-item d-lg-none" id="admin-slideout-button">
        <span class="icon">
          <i class="fa fa-arrow-circle-right"></i>
        </span>
      </a>
      @endif

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="nav-menu col-6">
    <ul class="navbar-nav mr-auto pull-right">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>
  </div>
  <div class="drop-menu col-6">
    <ul class="drop-tab pull-right">
      @if (Auth::guest())
      <li class="nav-item">
        <a href="{{route('login')}}"><i class="fa fa-lock"></i> Sign In/Join</a>
      </li>
      @else
      <li class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hey {{Auth::user()->name}}<b class="caret"></b>
      </a>

      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>Profile
      </a>
      <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>Notifications
      </a>
      <a class="dropdown-item" href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>Manage
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><span class="icon"><i class="fa fa-fw fa-sign-out m-r-5"></i></span>Logout
      </a>
      @include('forms.logout')
      </div>
      </li>
    </ul>
  </div>
@endif
  </div>
</nav>