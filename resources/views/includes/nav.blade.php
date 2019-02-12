{{--<!-- <div class="container"> -->--}}
  <nav class="nav navbar navbar-expand-lg sticky-top">
  
      {{--<!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->--}}
      
      @guest
    <a class="navbar-brand" href="{{ route('welcome') }}">
      <img src="{{ asset('images/1111.png') }}" width="50" height="30" alt="tuitter logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>    
      @else
    <a class="navbar-brand" href="/dashboard">
      <img src="{{ asset('images/1111.png') }}" width="50" height="30" alt="tuitter logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">    
        <li class="nav-item active">
          <a class="nav-link" href="/dashboard">Newsfeed <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi, {{ strtoupper(Auth::user()->username) }}! {{--<!-- <span class="oi" data-glyph="caret-bottom"></span> --><!-- <a href="#" class="btn btn-default"><span class=""></span> Default text here</a> -->--}}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        {{-- <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --> --}}
        {{--<!-- <li class="nav-item dropdown">
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            
            <div class="dropdown-divider"></div>
            
          </div>
        </li> -->--}}
        @endguest
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
{{--<!-- </div> -->--}}

