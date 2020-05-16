<!-- Start Header Area -->
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav mr-auto  ml-5">
							<li class="nav-item">
								<a class="nav-link" href="{{route('home') }}">
								Home
							</a>
						</li>

							<li class="nav-item submenu dropdown">
								<a href="{{route('shop.index') }}" class="nav-link">
								 Shop
								</a>	
							</li>
							
							<li class="nav-item active"><a class="nav-link" href=" {{ route('contact') }}">
								Contact
							</a>
						</li>
						</ul>

						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.html">
								Sign up
							</a>
						</li>

							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">
								 Login
								</a>	
							</li>
							
							<li class="nav-item active"><a class="nav-link" href="{{route('orders') }}">
								Orders
							    </a>
							</li>
							<li class="nav-item active"><a class="nav-link" href="contact.html">
								Logout
							    </a>
							</li>
							<li class="nav-item active"><a class="nav-link" href="{{route('cart.index') }}">
								cart
							    </a>
						    </li>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->