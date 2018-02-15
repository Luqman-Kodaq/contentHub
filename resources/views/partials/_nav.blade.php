        <div class="header-wrapper">                   
        <header id="header" class="dark ns fixed" role="navigation">
        <div class="header-inner">
         <nav id="" class="header-item m-t-25">
          <ul class="nav-menu pull-left">
                <a class="logo" href="{{route('/')}}">
                    <img src="{{asset('images/logo.jpg')}}" alt="E-store Logo" width="30" height="30" />
                </a>
          </ul>

          <ul class="nav nav-menu">
                <li class="nav-item active"><a href="{{route('/')}}">Home</a></li>
                <li class="nav-item"><a href="#">About Us</a></li>
                <li class="nav-item"><a href="#">Blog</a></li>
          </ul>
                @if (Auth::guest())        
           <ul class="nav nav-toggle pull-right">
                 <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Sign In/Join</a></li>                
           </ul>
                @else
           <ul class="nav nav-right pull-right">
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"> Hey {{Auth::user()->name}}<b class="caret"></b></a>
            <ul class="dropdown-menu" style="z-index: 3;">
                  <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>Profile</a>
                  <a class="dropdown-item" href="#"><span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>Notifications</a>
                  <a class="dropdown-item" href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>Manage</a>
                  <hr class="navbar-divider">
                  <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><span class="icon"><i class="fa fa-fw fa-sign-out m-r-5"></i></span>Logout
                  </a>
                  @include('forms.logout')
            </ul>
                </li>
            </ul>
            @endif                     
          </nav>
        </div>
        </header>
      </div>

@section('scripts')
      <script>
        
      </script>
@endsection