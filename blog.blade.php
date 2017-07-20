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
					<strong>Blog</strong>
				</div>
				<div class="panel-body xl-height">
					<div class="row">
						<div class="col-md-12">
							<center><h1>Coming Soon</h1></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection