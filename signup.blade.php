@extends('layouts.app')

@section('content')
<div class="container">
	<div class="nbd-container">
		<div class="nbd-content">
			<h1>I want to signup as:</h1>
			<a class="btn btn-link" href="/register/vendor">Vendor</a>
			<a class="btn btn-link" href="/register/customer">Customer</a>
			<a class="btn btn-link" href="/register/logistic">Logistic</a>
		</div>
	</div>
</div>
@include('footer')
@endsection