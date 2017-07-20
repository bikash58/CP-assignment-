@extends('layouts.store_front')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 ">
				<img src="http://www.gettyimages.co.uk/gi-resources/images/Embed/new/embed2.jpg">
		</div>
		<div class="col-md-8 no-gutter-col">
			<div class="main_carousel">
				<div class="col-md-12 no-gutter-col">
					@include('layouts.store_front.main_carousel')
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<img src="http://www.gettyimages.co.uk/gi-resources/images/Embed/new/embed2.jpg">
		</div>
	</div>
</div>
<br />
<div class="container-fluid">
	<div class="row no-gutter-row">
		<div class="col-md-9 no-gutter-col">
			<div class="row no-gutter-row">
				<!-- top left -->
				<div class="col-md-6 no-gutter-col-left">
					<div class="shadow">
						<div class="row no-gutter-row">
							<div class="col-md-3 no-gutter-col">
								<div class="row no-gutter-row">
									<div class="col-md-12 no-gutter-col">
										<img src="https://76.my/Malaysia/apple-iphone-7-plus-dummy-working-demo-phone-display-silver-rnvstore-1611-01-rnvstore@3.jpg" height=200 src="">
									</div>
								</div>
							</div>
							<div class="col-md-9">
							
								<div class="row">
									<a href="/category/{{$category[0]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="men.jpg" height="100"></div></a>
									<a href="/category/{{$category[1]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="women.jpg" height="100"></div></a>
									<a href="/category/{{$category[2]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="sport.jpg" height="100"></div></a>
									<a href="/category/{{$category[3]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="utensil.jpg" height="100"></div></a>
									<a href="/category/{{$category[4]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="accessories.jpg" height="100"></div></a>
									<a href="/category/{{$category[5]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="http://www.practicalcomponents.com/media/packages/photos/2187.png" height="100"></div></a>
								</div>
							
							</div>
						</div>
					</div>
				</div>
				<!-- end of top left -->
				<!-- top right -->
				<div class="col-md-6 no-gutter-col-right">
					<div class="shadow">
						<div class="row no-gutter-row">
							<div class="col-md-3 no-gutter-col">
								<div class="row no-gutter-row">
									<div class="col-md-12 no-gutter-col">
										<img src="https://76.my/Malaysia/apple-iphone-7-plus-dummy-working-demo-phone-display-silver-rnvstore-1611-01-rnvstore@3.jpg" height=200 src="">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<a href="/category/{{$category[0]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="men.jpg" height="100"></div></a>
									<a href="/category/{{$category[1]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="women.jpg" height="100"></div></a>
									<a href="/category/{{$category[2]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="sport.jpg" height="100"></div></a>
									<a href="/category/{{$category[3]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="utensil.jpg" height="100"></div></a>
									<a href="/category/{{$category[4]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="accessories.jpg" height="100"></div></a>
									<a href="/category/{{$category[5]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="http://www.practicalcomponents.com/media/packages/photos/2187.png" height="100"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end of top right -->
				<!-- bottom left -->
				<div class="col-md-6 no-gutter-col-left">
					<div class="mar-top shadow">
						<div class="row no-gutter-row">
							<div class="col-md-3 no-gutter-col">
								<div class="row no-gutter-row">
									<div class="col-md-12 no-gutter-col">
										<img src="https://76.my/Malaysia/apple-iphone-7-plus-dummy-working-demo-phone-display-silver-rnvstore-1611-01-rnvstore@3.jpg" height=200 src="">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<a href="/category/{{$category[0]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="men.jpg" height="100"></div></a>
									<a href="/category/{{$category[1]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="women.jpg" height="100"></div></a>
									<a href="/category/{{$category[2]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="sport.jpg" height="100"></div></a>
									<a href="/category/{{$category[3]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="utensil.jpg" height="100"></div></a>
									<a href="/category/{{$category[4]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="accessories.jpg" height="100"></div></a>
									<a href="/category/{{$category[5]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="http://www.practicalcomponents.com/media/packages/photos/2187.png" height="100"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end of bottom left -->
				<!-- top right -->
				<div class="col-md-6 no-gutter-col-right">
					<div class="mar-top shadow">
						<div class="row no-gutter-row">
							<div class="col-md-3 no-gutter-col">
								<div class="row no-gutter-row">
									<div class="col-md-12 no-gutter-col">
										<img src="https://76.my/Malaysia/apple-iphone-7-plus-dummy-working-demo-phone-display-silver-rnvstore-1611-01-rnvstore@3.jpg" height=200 src="">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<a href="/category/{{$category[0]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="men.jpg" height="100"></div></a>
									<a href="/category/{{$category[1]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="women.jpg" height="100"></div></a>
									<a href="/category/{{$category[2]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="sport.jpg" height="100"></div></a>
									<a href="/category/{{$category[3]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="utensil.jpg" height="100"></div></a>
									<a href="/category/{{$category[4]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="accessories.jpg" height="100"></div></a>
									<a href="/category/{{$category[5]->cat_type}}"><div class="col-md-4 no-gutter-col product-hover lb pad1"><img src="http://www.practicalcomponents.com/media/packages/photos/2187.png" height="100"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end of top right -->
			</div>
		</div>

		<div class="col-md-3 no-gutter-col">
			<img class="max-height" src="https://76.my/Malaysia/apple-iphone-7-plus-dummy-working-demo-phone-display-silver-rnvstore-1611-01-rnvstore@3.jpg">
		</div>

	</div>
</div>
<br />
<div class="container-fluid">
	<div class="row no-gutter-row shadow">
		<div class="col-md-1">
			<div class="dummy-box"></div>
		</div>
		<div class="col-md-12 no-gutter-col">
			<div class="row no-gutter-row">
				<div class="col-md-12 no-gutter-col">
					<div class="horizontal-scroll-holder">
						<div class="prev"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i></div><!--
						--><div class="content">
						@foreach ($product as $key => $value)
							
							<div class="dummy-box">
								<a href="http://127.0.0.1:8000/{{ $product->get($key)->product_url }}">
                                	<img height=100% width=100% src="http://127.0.0.1:8000/{{$product->get($key)->thumbnail_url }}">
                                </a>
							</div>
							
						@endforeach
					
						</div><!--
						--><div class="next"><i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 no-gutter-col">
			<div class="row no-gutter-row">
				<div class="col-md-12 no-gutter-col">
					<div class="horizontal-scroll-holder">
						<div class="prev"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i></div><!--
						--><div class="content">
							@foreach ($product as $key => $value)
							
							<div class="dummy-box">
								<a href="http://127.0.0.1:8000/{{ $product->get($key)->product_url }}">
                                	<img height=100% width=100% src="http://127.0.0.1:8000/{{$product->get($key)->thumbnail_url }}">
                                </a>
							</div>
							
						@endforeach
							
						</div><!--
						--><div class="next"><i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<br />
<div class="container-fluid">
	<div class="cv-container shadow">
	<div class="row no-gutter-row">
		<div class="col-md-6 no-gutter-col">
			<iframe class="cover-video" src="https://www.youtube.com/embed/JGwWNGJdvx8"></iframe>
		</div>
		<div class="col-md-6 no-gutter-col">
			<div class="cv-desc">
				<p>Nepal Best Deal is an E-commerce company that is established with the aim of reducing gap between wholeseller and customer and providing fair pay for all those eople who are searhing an easy way of shopping option to curtail the time from shopping hassles out of their busy schedule.</p>
			</div>
		</div>
	</div>
	</div>
</div>
<br />
<div class="container-fluid">
	<div class="map-container shadow">
	<div class="row no-gutter-row">
		<div class="col-md-6 no-gutter-col">
			There will be some kind of brands here
		</div>
		<div class="col-md-6 no-gutter-col">
			<div class="map">
				<div id="map-canvas"></div>
			</div>
		</div>
	</div>
	</div>
</div>
<br />
<div class="container-fluid">
	<div class="row no-gutter-row shadow">
		<div class="col-md-12 no-gutter-col">
			<h4><center>Our Members</center></h4>
		</div>
		<div class="col-md-12 no-gutter-col">
			<div class="row no-gutter-row">
				<div class="col-md-12 no-gutter-col">
					<div class="horizontal-scroll-holder">
						<div class="prev"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i></div><!--
						--><div class="content">
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
							<div class="dummy-box"></div>
						</div 
			</div>
		</div>
	</div>
</div>
<br />
@endsection 