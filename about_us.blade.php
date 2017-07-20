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
					<h4>About Us</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 no-gutter-col">
							<div class="au-desc">
								<p>Nepal Best Deal is the go to online shopping destination, for all those people who are searching an easy way of shopping option to curtail the time from shopping hassles out of their busy schedule. As Nepal Best Deal is leading with a motto “A touch and the world is yours”, it not only satisfies the people’s shopping desire but also make their shopping time joyful, exciting and faster simply with a touch from the smart technology.</p>
								<p>Basically we are here to erase the gap between the buyer and seller. So sellers will get a chance to amaze the customer with all the cutting-edge products as well as buyers can have the latest products in their fingertips. We have wide range of shopping option and we are always positive in counting our customer’s suggestions for furtherance.</p>
								<p>Nepal Best Deal aims to widen the online shopping platform nationally and make people aware of how they can simplify their shopping hours and get high satisfaction from us.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection