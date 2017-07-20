<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Styles -->
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
        <!-- start of navigation / header -->
        @include('layouts.partials.navigation')
        <!-- end of navigation / header -->
    	
    	<!-- main content resides here -->
    	<div class="container-fluid nbd-main">
            <div class="nbd-wrapper-inner">
                <div class="row no-gutter-row">
                    <div class="col-md-2 no-gutter-col">
                        <div class="row no-gutter-row">
                            <div class="col-md-12  no-gutter-col">
                                <div class="panel panel-default nbr">
                                    <div class="panel-heading">
                                        My Account
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                <a href="/home">Home</a>
                                            </li>
                                            <li>
                                                <a href="/update">My Details</a>
                                            </li>
                                            <li>
                                                <a href="/additem">Add Items</a>
                                            </li>
                                            <li>
                                                <a href="/billing">Billing</a>
                                            </li>
                                            <li>
                                                <a href="/billing">Order Details</a>
                                            </li>
                                            <li>
                                                <a href="/statistics">Graph</a>
                                            </li>
                                            <li>
                                                <a href="/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  no-gutter-col">
                                <div class="panel panel-default nbr">
                                    <div class="panel-heading">
                                        Categories
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                <a href="">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="">Bluetooth Speaker</a>
                                            </li>
                                            <li>
                                                <a href="">Fitness and Supplements</a>
                                            </li>
                                            <li>
                                                <a href="">Home & Living</a>
                                            </li>
                                            <li>
                                                <a href="">Men's</a>
                                            </li>
                                            <li>
                                                <a href="">Music</a>
                                            </li>
                                            <li>
                                                <a href="">Pet Essentials</a>
                                            </li>
                                            <li>
                                                <a href="">Posters</a>
                                            </li>
                                            <li>
                                                <a href="">T-shirts</a>
                                            </li>
                                            <li>
                                                <a href="">Women's</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end of main content -->
    	@include('layouts.partials.footer')
	</div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>