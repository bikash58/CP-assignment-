@extends('layouts.user')

@section('content')

<div class="col-md-10">

	<!-- upload success message -->
	<div class="alert alert-success alert-custom-success col-md-12">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Success!</strong> You just uploaded a product.
	</div>
	<!-- end of upload success message -->

	<!-- upload error message -->
	<div class="alert alert-danger alert-custom-danger col-md-12">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Error!</strong> Could not add product. Please try again later.
	</div>
	<!-- end of upload error message -->
	<div class="panel panel-default">
		<div class="panel-heading">Add an Item</div>
		<div class="panel-body">
			<div class="vendor-item">
				<div class="row no-gutter-row">
					<div class="col-md-4 no-gutter-col thumbnail-holder">
						<div class="product-thumbnail">
							<img src="" id="product-image-preview">
						</div>
						@for ($i = 0; $i < 5; $i++)
						<div class="product-thumbnail-sub thumb-sub-{{ $i }}"><img src="" /></div>
						@endfor
						<div class="col-md-12"><p>Only JPEG image.</p></div>
					</div>
					
					<div class="col-md-8 no-gutter-col">
						<div class="product-description">
							<form class="form" id="form-vendor-additem" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
								<input type='file' accept=".jpg, .jpeg" name="image" id="imgInp" />
								@for ($i = 0; $i < 5; $i++)
								<input type='file' name="image{{ $i }}" accept=".jpg, .jpeg" class="thumb-sub-{{ $i }}-file" />
								@endfor
								<div class="row">
									<div class="col-md-6">
										<div class="form-group clearfix form-group-zero">
											<label for="product_name" class="control-label col-xs-5 label-right">Name :</label>
											<div class="col-xs-7 no-gutter-col">
												<input required="required" id="product-name" class="form-control input" type="text" name="product_name" >
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="product_name" class="control-label col-xs-5 label-right">SKU :</label>
											<div class="col-xs-7 no-gutter-col">
												<input required="required" id="product-sku" class="form-control input" type="text" name="product_sku" >
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="category" class="control-label col-xs-5	 label-right">Category :</label>
											<div class="col-xs-7 no-gutter-col">
												<select name="product_category" class="">
													@foreach($cat as $key => $value)
													
														<option value="{{ $value->id }}">{{ $value->cat_type }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="sub_category" class="control-label col-xs-5 label-right">Sub category :</label>
											<div class="col-xs-7 no-gutter-col">
												<select name="product_sub_category" class="">
													@foreach($sub as $key => $value)
														<option value="{{ $value->id }}">{{ $value->sub_cat_type }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="form-group form-group-zero">
											<label for="product_price" class="control-label col-xs-5 label-right">Price :</label>
											<div class="col-xs-2 no-gutter-col">
												<input required="required" id="product_price" class="form-control input" type="text" name="product_price">
											</div>
										</div>
										<div class="form-group form-group-zero clearfix">
											<label for="product_quantity" class="control-label col-xs-3 label-right">Qty :</label>
											<div class="col-xs-2 no-gutter-col">
												<input required="required" id="product-name" class="form-control input" type="text" name="product_quantity">
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="product_colors" class="control-label col-xs-5 label-right">Colors :</label>
											<div class="col-xs-7 no-gutter-col">
												<input required="required" id="product-name" class="form-control input" type="text" name="product_colors" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group clearfix form-group-zero">
											<label for="product-name" class="control-label col-xs-4 label-right">Size :</label>
											<div class="col-xs-8 no-gutter-col">
												<input required="required" id="product-name" class="form-control input" type="text" name="product_size">
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="product-name" class="control-label col-xs-4 label-right">Brand :</label>
											<div class="col-xs-8 no-gutter-col">
												<input required="required" id="product-name" class="form-control input" type="text" name="product_brand">
											</div>
										</div>
										<div class="form-group clearfix form-group-zero">
											<label for="product-name" class="control-label col-xs-4 label-right">Details :</label>
											<div class="col-xs-8 no-gutter-col">
												<textarea required="required" id="product_details" placeholder="If there are any additional details you can include it here." class="form-control input" type="text" name="product_details"></textarea>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutter-row">
				<div class="col-md-2 no-gutter-col col-md-offset-10 button-bar">
					<div class="margin-right">
						<button id="upload" class="btn btn-default">Upload</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
