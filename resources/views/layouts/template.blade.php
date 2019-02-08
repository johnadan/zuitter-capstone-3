<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('includes.header')
</head>
@include('includes.nav')
<body>
	

	
	@yield('content')
	
@include('includes.footer')	
</body>
</html>
