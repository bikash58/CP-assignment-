<!DOCTYPE html>
<html>
<head>
	<title>Nepal Best Deal</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- styles -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<body>
	<div class="preloader"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
	<div class="nbd-wrapper">
	
    <!-- header / navigation bar -->
    @include('layouts.partials.navigation')
    <!-- end of header / navigation bar -->

    @yield('content')
	
	@include('layouts.partials.footer')

	</div>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-HMHIKdY8O8hZfrsHZUq1UkzEGI40XSo&sensor=false">
    </script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>