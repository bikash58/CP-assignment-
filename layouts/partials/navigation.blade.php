<div class="sticky-nav">
    <div class="persistent-nav">
        <nav class="navbar navbar-default">
          <div class="container-fluid no-gutter-col">
            <div class="wrapper">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="{{ route('product.shoppingCart')}}">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;&nbsp; <span class = "badge cart-badge nbr">{{ Session::has('cart') ? Session::get('cart')->totalQty:''}}</span> Items
                        </a>
                    </li>
                    @if(auth()->check())
                    <li>
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle nbr nbdr" type="button" id="menu1" data-toggle="dropdown">{{ auth()->user()->name }}
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu nbr" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> &nbsp;&nbsp;Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-cog" aria-hidden="true"></i> &nbsp;&nbsp;Settings</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-history" aria-hidden="true"></i> &nbsp;&nbsp;Purchase History</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li>
                        </ul>
                      </div>
                    </li>
                    @else
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
          </div>
        </nav>    
    </div>
    
    <!-- search bar navigation -->
    <div class="searchbar">
        <div class="navbar navbar-default">
          	<div class="container-fluid nbd-user-nav-search">
    	        <div class="col-md-4 no-gutter-col">
                    <!-- logo -->
                    <div class="nav navbar-header">
                      <a href="#"><img class="logo" src="{{ asset('site_logo_large.png') }}"></a>
                    </div>
                    <!-- end of lo -->
                </div>

                <div class="col-md-4">
                    <!-- search box -->
                   
                    <div class="search-box">
        				<div class="row no-gutter-row">
                            <form action= "{{ route('category.index')}}" method="GET" class="col-md-12 no-gutter-col">
            					<input class="col-md-8" type="text" name="search" />
            					<button class=" col-md-4 btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> search</button>
            				</form>
                        </div>
                    </div>
                    <!-- end of search box -->
                </div>

    			<div class="col-md-4 no-gutter-col">
                    <!-- social icons -->
    				<div class="row nbd-row no-gutter-row">
                        <div class="social-icon" style="">
                            <a href=""><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>&nbsp;
                            <a href=""><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a>&nbsp;
                            <a href=""><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>&nbsp;
                            <a href=""><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>&nbsp;
                            <a href=""><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- end of social icons -->
    			</div>
            </div>
        </div>
    </div>
    <!-- end of searchbar navigation -->
    
    <!-- main navigation -->
    <div class="custom-nav">
        <nav class="navbar navbar-default nbd-navbar">
    	    <div class="col-md-4 no-gutter-col">
                <!-- contains categories -->
                <ul class="nav navbar-nav">
                  <li class="dropdown custom-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <!-- level 1 navigation -->
                            <a href="#">Men's</a>
                            <ul class="hover-category">
                                <div class="row">
                                    <div class="col-md-4"><li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li></div>
                                    <div class="col-md-4"><li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li></div>
                                    <div class="col-md-4"><li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li>
                                <li><a href="#">Men's wear</a></li></div>
                                </div>
                            </ul>
                            <!-- end of level 1 navigation -->
                        </li>
                        <li><a href="#">Women's</a></li>
                        <li><a href="#">Home & Living</a></li>
                        <li><a href="#">Pet Essetials</a></li>
                        <li><a href="#">Electronics</a></li>
                    </ul>
                    </li>
                </ul>
                <!-- end of categories -->
            </div>
            <div class="col-md-4 no-gutter-col">
                <!-- contais main navigation links -->
        	    <ul class="nav navbar-nav">
        	      <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        	      <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Shop</a></li>
        	      <li><a href="/about-us"><i class="fa fa-building" aria-hidden="true"></i> About Us</a></li>
        	      <li><a href="/faq"><i class="fa fa-info" aria-hidden="true"></i> FAQ</a></li>
        	      <li><a href="/blog"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a></li>
        	    </ul>
                <!-- end of main navigation links -->
            </div>
            <div class="col-md-4 nav no-gutter-col nbd-left">
                <!-- contains margin neplai product -->
                <ul class="nav navbar-nav">
                  <li><a href="#">Nepali Products</a></li>
                </ul>
                <!-- end of nepali product -->
            </div>
    	</nav>	
    </div>
    <!-- end of main navigation -->
</div>