
<div class="row no-gutter-row">
				<!-- categories lists -->
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Categories
						</div>
						<div class="panel-body">
							<ul>
								<li><a href="/">Accessories</a></li>
								<li><a href="/">Bluetooth Speaker</a></li>
								<li><a href="/">Fitness and Supplements</a></li>
								<li><a href="/">Home & Living</a></li>
								<li><a href="/">Men's</a></li>
								<li><a href="/">Music</a></li>
								<li><a href="/">Pet Essentials</a></li>
								<li><a href="/">Posters</a></li>
								<li><a href="/">T-shirt</a></li>
								<li><a href="/">Women's</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- most popular categories -->
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Most popular
						</div>
						<div class="panel-body">
							<!-- mp: most popular -->
							 <div class="row no-gutter-row">
						 		
						 			
						 		<div class="col-md-12 no-gutter-col">
						 			@foreach($products as $key => $value)
						 			<div class="mp-container">
						 			
						 			    <div class="mp-item">
						 					<div class="mp-item-image">
						 						<img height=100% width=100% src="http://127.0.0.1:8000/{{$products->get($key)->thumbnail_url }}">

						 					</div>
						 					<div class="mp-item-desc">
							 					<a href="">{{ $products->get($key)->name}}</a><br />
							 						{{ $products->get($key)->price}}
							 					*****<br />
						 					
						 					</div>
						 				</div>
						 				
						 			</div>
						 			@endforeach
						 			<div class="mp-divider"></div>
						 		</div>
						 		
							 </div>
						</div>
					</div>
				</div>
			</div>