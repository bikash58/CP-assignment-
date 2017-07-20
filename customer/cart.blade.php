@extends('layouts.customer')

@section('content')

<div class="col-md-10 no-gutter-col-right">
	<div class="panel panel-default nbr">
		<div class="panel-heading">Customer ID : {{ auth()->user()->id }}</div>
		<div class="panel-body">
			@if(false)
				<!-- cart is empty -->
				<div class="well">Sorry! There  are no items in your cart.</div>
				<!-- end of cart is empty -->
			@else
				<!-- cart has items -->
				<div class="row no-gutter-row">
					<div class="col-md-12 no-gutter-col">
						<table class="table borderless">
							<thead>
								<tr>
									<th>S.N</th>
									<th></th>
									<th>Product Details</th>
									<th>Color</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach($products as $product)

								<tr>
								
									<td>John</td>
									<td>
										<div class="c-image">
											<img src="http://127.0.0.1:8000/{{$product['image']}}" width="100%" height="100%">
										</div>
									</td>
									<td>{{ $product['otherdetails']}}</td>
									
									<td>Red</td>
									<td>32 XL</td>
									
									<td>{{ $product['qty']}}</td>
									<td>Rs. {{ $product['price']}}</td>
									
									<td>
										<div class="btn btn-default btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i>delete</div>
									</td>
								</tr>
							@endforeach
								

							</tbody>
						</table>
							<p style="float:right;">Total : {{ $totalPrice}}</p>
					</div>
				</div>
				<!-- end of cart has items -->
			@endif
		</div>
	</div>
</div>
<h2 style="text-align:center;">Cash on Delivery</h2>
@endsection