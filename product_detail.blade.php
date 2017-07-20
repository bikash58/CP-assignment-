@extends('layouts.store_front')

@section('content')
{{dd($pa)}}



<div class="container-fluid">
	<div class="row no-gutter-row">
		
		<!-- sidebar -->
		<div class="col-md-3 no-gutter-col">
			 @include('layouts.store_front.sidebar');
		</div>
		<!-- end of sidebar -->

		<!-- product image and description -->
		<div class="col-md-9 no-gutter-col section">
			<div class="row">
				<div class="col-md-6">
					<!-- pd: product detail -->
					<div class="pd-image">
						<img height=100% width=100% src="http://127.0.0.1:8000/{{$product->thumbnail_url }}">
					</div>
					 
					<!-- <div class="pd-image-list">
						
					</div>-->
					
				</div>


				<div class="col-md-6">
					<div class="pd-desc">
						<h3>{{ $product->name}}</h3>
						<p><strong>Rs {{ $product->price}}</strong></p>
						
						<p><span><strong>Size : </strong></span><span>{{ $pa['product_size'] }}</span></p>
						<p><span><strong>Color : </strong></span><span>{{ $pa['product_brand'] }}</span></p>
						<p><span><strong>Quantity : </strong></span><i class="btn btn-info btn-xs fa fa-plus"></i><span> {{ $pa['product_quantity'] }} </span><i class="btn btn-info btn-xs fa fa-minus"></i></p>
						<div class="row no-gutter-row">
							<div class="col-md-8 col-md-offset-1">
								<button class="btn btn-primary col-md-12">Buy Now</button>
							</div>
						</div><br />
						<div class="pd-action-area">
							<div class="row no-gutter-row">
								<div class="col-md-6">
									<a href="{{ route('product.addtocart',['id'=>$product->id])}}"><button class="btn btn-primary btn-link"><i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</i> Add to cart</button></a>
								</div>
								<div class="col-md-6">
									<button class="btn btn-link"><i class="fa fa-heart-o">&nbsp;&nbsp;&nbsp;&nbsp;</i> Add to favorite(s)</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of product image and description -->
		<br />
		<!-- product description -->
		<div class="col-md-9 no-gutter-col section">
			<div class="row">
				<div class="col-md-12">
					<!-- navigator -->
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
						<li><a data-toggle="tab" href="#company-profile">Company profile</a></li>
					</ul>

					<!-- tab content(s) -->
					<div class="tab-content">
						<!-- product description here -->
						<div id="description" class="tab-pane fade in active">
							<table class="table table-striped">
								<tbody>
									<tr>
										<th scope="row">Product Name</th>
										<td>Product Name</td>
									</tr>
									<tr>
										<th scope="row">Style no.</th>
										<td>Mark</td>
									</tr>
									<tr>
										<th scope="row">Color</th>
										<td>Jacob</td>
									</tr>
									<tr>
										<th scope="row">Upper</th>
										<td >Larry the Bird</td>
									</tr>
									<tr>
										<th scope="row">Lininng</th>
										<td>Larry the Bird</td>
									</tr>
									<tr>
										<th scope="row">Outsole</th>
										<td>Larry the Bird</td>
									</tr>
									<tr>
										<th scope="row">Site range</th>
										<td>Larry the Bird</td>
									</tr>
									<tr>
										<th scope="row">MOQ</th>
										<td>Larry the Bird</td>
									</tr>
									<tr>
										<th scope="row">Post of loading</th>
										<td>Larry the Bird</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- company profile goes here -->
						<div id="company-profile" class="tab-pane fade">
							<h3>Company Profile</h3>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of product description -->
		
		<!-- full picture -->
		<div class="col-md-9 section">
			<div class="pd-large-image"></div>
		</div>
		<!-- end of full picture -->

		<!-- rp: related products -->
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">Related Product</div>
				<div class="panel-body">
					@foreach($products as $key => $value)
					<div class="rp-holder">
					
						<div class="rp-item">
							<div class="rp-item-image">
								<img width=100% height=100% src="http://127.0.0.1:8000/{{$products->get($key)->thumbnail_url }}">
							</div>
							<div class="rp-item-desc">
								<p>
									<span>{{ $products->get($key)->name }}</span><br />
									<span>{{ $products->get($key)->price }}</span>
									<span class="col-md-offset-2">*****</span>
								</p>
							</div>
						</div>
						
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- end of realted products -->
	</div>
</div>
@endsection