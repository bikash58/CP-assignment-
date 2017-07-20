@extends('layouts.store_front')

@section('content')

<div class="container-fluid margin-zero">
	<div class="row no-gutter-row">
		<div class="col-md-12 no-gutter-col">
			<p class="color-primary">home > speakers</p>
		</div>
	</div>
</div>

<div class="container-fluid margin-zero">
	<div class="row no-gutter-row">
		<div class="col-md-3 no-gutter-col">
			@include('layouts.store_front.sidebar')
		</div>
		<div class="col-md-9 no-gutter-col">
			<div class="panel panel-default">
				<div class="panel-heading">
					Speakers
				</div>
				<div class="panel-body">
					<div class="row">
						@foreach($product as $key => $value)
						<div class="col-md-4">
						<a href="http://127.0.0.1:8000{{ $product->get($key)->product_url }}">
							<div class="product">
							
								<div class="box">
									<img width=100% height=100% src="http://127.0.0.1:8000/{{$product->get($key)->thumbnail_url }}">
								</div>
							
								<p>{{ $product->get($key)->name}}<br />{{ $product->get($key)->price}}<span class="col-md-offset-8">*****</span></p>
							</div>
							</a>
						</div>
						@endforeach
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection