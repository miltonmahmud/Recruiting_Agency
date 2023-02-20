<div>
	<header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header top-header-two">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<ul class="header-left-content">
								<li>
									<span>Hot Line</span>
									<a href="tel:+1-(514)-312-5678">{{$settings->phone}}</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="header-right-content">
								@if(Route::has('login'))
									@auth
									@if(Auth::user()->utype === 'ADM')
										<ul class="log-in">
											<li>
												<a href="{{route('admin.dashboard')}}">
													<i class="bx bxs-lock"></i>
													My Account ({{Auth::user()->name}})
												</a>
											</li>
										</ul>
									@elseif(Auth::user()->utype === 'EML')
										<ul class="log-in">
											<li>
												<a href="{{route('employer.dashboard')}}">
													<i class="bx bxs-lock"></i>
													My Account ({{Auth::user()->name}})
												</a>
											</li>
										</ul>
									@else
										<ul class="log-in">
											<li>
												<a href="{{route('user.dashboard')}}">
													<i class="bx bxs-lock"></i>
													My Account ({{Auth::user()->name}})
												</a>
											</li>
										</ul>
									@endif
								@else
									<ul class="log-in">
										<li>
											<a href="{{route('login')}}">
												<i class="bx bxs-lock"></i>
												Log In
											</a>
										</li>

										<li>
											<a href="{{route('register')}}">
												<i class="bx bxs-user"></i>
												Register
											</a>
										</li>
									</ul>
								@endif
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->
			
			<!-- Start Navbar Area -->
			<div class="navbar-area">
				<div class="mobile-nav">
					<div class="container">
						<div class="mobile-menu">
							<div class="logo">
								<a href="{{route('home')}}">
									<!-- <img src="assets/images/logo.png" alt="logo"> -->
									<img src="{{asset('assets/images/logo3.png')}}" alt="" width="60px">
								</a>
							</div>
						</div>
					</div>
				</div>
	
				<div class="desktop-nav">
					<div class="container">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="{{route('home')}}">
								<img src="{{asset('assets/images/logo3.png')}}" alt="" width="130px">
							</a>
	
							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="{{route('home')}}" class="nav-link">
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('about')}}" class="nav-link">
											About Us
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('job-openings')}}" class="nav-link">
											Job Openings
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('testimonials')}}" class="nav-link">
											Testimonials
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('clients')}}" class="nav-link">
											Clients
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('contact')}}" class="nav-link">
											Contact Us
										</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
	
				<div class="others-option-for-responsive">
					<div class="container">
						<div class="dot-menu">
							<div class="inner">
								<div class="circle circle-one"></div>
								<div class="circle circle-two"></div>
								<div class="circle circle-three"></div>
							</div>
						</div>
						
						<div class="container">
							<div class="option-inner">
								<div class="others-option justify-content-center d-flex align-items-center">
									<div class="get-quote">
										<a href="#" class="default-btn">
											Post a Job
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navbar Area -->
		</header>
</div>