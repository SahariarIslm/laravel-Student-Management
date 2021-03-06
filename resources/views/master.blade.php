<!DOCTYPE html>
<html>
<head>
	<title>
    @yield('title','Student Management App')
  </title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	
		<!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Management App</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li 
              @if(Route::currentRouteName() == 'index'))
              class="active"
              @endif
              ><a href="{{route('index')}}">Home</a></li>
              <li
              @if(Route::currentRouteName() == 'create'))
              class="active"
              @endif
              ><a href="{{route('create')}}">Create</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
              <li><a href="{{route('home')}}">Dashboard</a></li>
              @else
              <li><a href="{{route('register')}}">Register</a></li>
              <li><a href="{{route('login')}}">Login</a></li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="container">
		@yield('content')
	</div>

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
</body>
</html>