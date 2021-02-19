<nav class="nav navbar navbar-expand-lg sticky-top">

  @guest

  <a class="navbar-brand" href="{{ route('welcome') }}">
    <img src="{{ asset('images/zuitt.png') }}" width="50" height="50" alt="zuitt logo">
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

  @endguest

  @member 

  <a class="navbar-brand" href="/dashboard">
    <img src="{{ asset('images/zuitt.png') }}" width="50" height="50" alt="zuitt logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Newsfeed <span class="sr-only">(current)</span></a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/dashboard" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, {{ ucfirst(Auth::user()->username) }}! {{--<!-- <span class="oi" data-glyph="caret-bottom"></span> --><!-- <a href="#" class="btn btn-default"><span class=""></span> Default text here</a> -->--}}
        {{-- </a>
      </li>  --}}
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Hi, {{ ucfirst(Auth::user()->username) }}!</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter a user" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>

  @endmember

  @admin

  <a class="navbar-brand" href="/admindashboard">
    <img src="{{ asset('images/zuitt.png') }}" width="50" height="50" alt="zuitt logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item active">
        <a class="nav-link" href="/admindashboard">Hi, {{ ucfirst(Auth::user()->username) }}!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>

  @endadmin

</nav>


