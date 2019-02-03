<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.header')
</head>
@include('layouts.nav')
<body>
	@if(Auth::user()->isAdmin === 1)
	@yield('admin_body')

	@else
	@yield('user_body')
	@endif
	
</body>
</html>
