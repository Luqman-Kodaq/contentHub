<nav class="navbar fixed-top navbar-expand-lg navbar-light">
  <a href="#" class="navbar-brand">ContentHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      @if (Request::segment(1) == "manage")
      <a class="navbar-item d-lg-none" id="admin-slideout-button">
        <span class="icon">
          <i class="fa fa-arrow-circle-right"></i>
        </span>
      </a>
      @endif

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      @if (Auth::guest())
      <li class="nav-item">
        <a class="nav-link m-l-200" href="{{route('login')}}"><i class="fa fa-lock"></i> Sign In/Join</a>
      </li>
      @else
      <li class="dropdown">
      <a class="nav-link dropdown-toggle m-l-100" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hey {{Auth::user()->name}}<b class="caret"></b>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>Profile
      </a>
      <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span>Notifications
      </a>
      @if (Request::segment(1) == "admin")
      <a class="dropdown-item" href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog"></i></span>Manage
      </a>
      @endif
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>Logout
      </a>
      @include('_includes.forms.logout')
      </div>
      </li>
      @endif
    </ul>
  </div>
</nav>
