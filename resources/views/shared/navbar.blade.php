<header id="header"><!--header-->
	<!-- <div class="header_top"><!--header_top-->
			<!-- <div class="container">
				<div class="row">
					
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
	<!-- </div --><!--/header_top--> 

	<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ url('/') }}"><img src="/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if(Auth::check())
									<li><a href="#"><i class="fa fa-user"></i>{{{ Auth::user()->name }}}</a></li>
									<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
									<li><a href="{{ url('/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
									<li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Signout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                    </form>
								@endif
								@if(Auth::guest())
									<li><a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								@endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
					<!--Search bar || Enable if route isnt login or other-->
						<script>
							console.log("This code part is excuted");
						</script>									
						<div class="container">
						    <div class="row">    
						        <div class="col-xs-8 col-xs-offset-2">
								    <div class="input-group">
						                <div class="input-group-btn search-panel">
						                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
						                    </button>
						                    <ul class="dropdown-menu" role="menu">
						                      <li><a href="#contains">ANJUN</a></li>
						                      <li><a href="#its_equal">KIA</a></li>
						                      <li><a href="#greather_than">HYUNDAI</a></li>
						                      <li><a href="#less_than">KCW</a></li>
						                      <li><a href="#less_than">BOSCH</a></li>
						                      <li><a href="#less_than">INFAC</a></li>
						                      <li class="divider"></li>
						                      <li><a href="#all">Anything</a></li>
						                    </ul>
						                </div>
						                <input type="hidden" name="search_param" value="all" id="search_param">         
						                <input type="text" class="form-control" name="x" placeholder="Search term...">
						                <span class="input-group-btn">
						                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
						                </span>
						            </div>
						        </div>
							</div>
						</div>
										
				</div>	
						
			</div>
	</div><!--/header-bottom-->
</header><!--/header-->
