<div id="main_carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#main_carousel" data-slide-to="0" class="active"></li>
	  <li data-target="#main_carousel" data-slide-to="1"></li>
	  <li data-target="#main_carousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

	  <div class="item active">
	    <img src="{{ asset('4643441_orig.jpg')}}" alt="Los Angeles">
	    <!-- <div class="carousel-caption">
	      <h3>Los Angeles</h3>
	      <p>LA is always so much fun!</p>
	    </div> -->
	  </div>

	  <div class="item">
	    <img src="{{ asset('images.jpg')}}" alt="Chicago">
	    <!-- <div class="carousel-caption">
	      <h3>Chicago</h3>
	      <p>Thank you, Chicago!</p>
	    </div> -->
	  </div>

	  <div class="item">
	    <img src="{{ asset('shoes.jpg')}}" alt="New York">
	    <!-- <div class="carousel-caption">
	      <h3>New York</h3>
	      <p>We love the Big Apple!</p>
	    </div> -->
	  </div>

	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#main_carousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#main_carousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>