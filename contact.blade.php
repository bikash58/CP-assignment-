@extends('layouts.store_front')

@section('content')
<div class="container-fluid margin-zero">
	<div class="row no-gutter-row">
		<div class="col-md-12 no-gutter-col">
			<p class="color-primary">home > contact us</p>
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
				<div class="panel-body xl-height">
					<div class="row">
						<div class="col-md-12">
							<center><h3 class="underline">Contact Us</h3></center>
						</div>
						<!-- contact form resides here -->
						<div class="col-md-6">
							<section id="contact">
								<div class="contact-section">
								<form>
									<div class="form-group">
										<label for="exampleInputUsername">Your name</label>
										<input type="text" class="form-control" id="" placeholder=" Enter Name">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail">Email Address</label>
										<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
									</div>	
									<div class="form-group">
										<label for="subject">Subject</label>
										<input type="text" class="form-control" id="subject" placeholder=" Enter subject for this message">
									</div>
									<div class="form-group">
										<label for ="description"> Message</label>
										<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
									</div>
									<div>

										<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
									</div>
								</form>
								</div>
							</section>
						</div>
						<!-- end of contact form -->

						<div class="col-md-6">
							<img src="{{ asset('site_logo_large.png') }}" height="100">
							<div class="contact-info">
								<p>
									<center><h4 class="underline">Find us here</h4></center>
								</p><!--
								--><p>
									<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;nepalbestdeal@gmail.com
								</p><!--
								--><p>
									<i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;01-6200322
								</p><!--
								--><p>
									<i class="fa fa-home" aria-hidden="true"> &nbsp;&nbsp;&nbsp;&nbsp;</i>Puranobaneshwor, Kathmandu
								</p><!--
								--><p>
									<i class="fa fa-globe" aria-hidden="true"> &nbsp;&nbsp;&nbsp;&nbsp;</i>http://www.nepalbestdeal.com
								</p>
							</div>
						</div>

						<!-- google maps -->
						<div class="col-md-12">
							<div class="contact-map">
								<div id="map-canvas"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection