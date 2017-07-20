@extends('layouts.customer')

@section('content')
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			Customer ID : {{auth()->user()->id}}
		</div>
		<div class="panel-body">
			<div class="row no-gutter-row">
				<div class="col-md-12 no-gutter-col">
					<h3>My Favorites</h3>
				</div>
				@for($i = 1; $i <10 ; ++$i)
				<div class="col-md-3">
					<div class="mf-item-container">
						<div class="mf-item">
						<div class="mf-item-remove fa fa-trash"></div>
							<div class="mf-item-image">
								
							</div>
							<div class="mf-item-desc">
								<div class="mf-name"><a href="#">Product Name</a></div>
								<div class="mf-price">Rs. 1250</div>
								<div class="mf-rating">* * * * *</div>
							</div>
						</div>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>
@endsection