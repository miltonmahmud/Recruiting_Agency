

<div>

	<style>
		
		.candidates-listing-area .candidates-single-listing {
		    padding: 30px;
		    background-color: #ffffff;
		    -webkit-box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
		    box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
		    -webkit-transition: all ease 0.5s;
		    transition: all ease 0.5s;
		    margin-bottom: 30px;
		    overflow: hidden;
		    position: relative;
		    border-radius: 0;
		}

		.candidates-listing-area .candidates-single-listing .hot-jobs-img img {
		    border-radius: 0;
		}

		.default-btn {
			/*min-width: 190px !important;*/
			margin: 3px 0;
		}

	</style>

	<section class="candidates-dashboard-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">

							<ul>
								<li>
									<a href="{{route('admin.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('admin.posted-jobs')}}">All Jobs List</a>
								</li>
								<li>
									<a href="{{route('admin.all-employers')}}">All Employers</a>
								</li>
								<li>
									<a href="{{route('admin.all-applicants')}}">All Applicants</a>
								</li>
								<li>
									<a href="{{route('admin.all-users')}}" class="active">All Users</a>
								</li>
								<li>
									<a href="{{route('admin.all-messages')}}">All Messages</a>
								</li>
								<li>
									<a href="{{route('admin.all-services')}}">All Services</a>
								</li>
								<li>
									<a href="{{route('admin.all-settings')}}">All Settings</a>
								</li>
								<li>
									<a href="{{route('admin.all-testimonials')}}">All Testimonials</a>
								</li>
								<li>
									<a href="{{route('admin.all-faqs')}}">All FAQs</a>
								</li>
								<li>
									<a href="{{route('admin.all-clients')}}">All Clients</a>
								</li>
								<li>
									<a href="{{route('admin.homepage-banner')}}">Homepage Banner</a>
								</li>
								<li>
									<a href="{{route('admin.about-section')}}">About Section</a>
								</li>
								<li>
									<a href="{{route('admin.change-password')}}">Change Password</a>
								</li>
								<li>
									<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('Logout-form').submit();">Log Out</a>
									<form id="Logout-form" method="POST" action="{{route('logout')}}">
										@csrf 
									</form>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="row">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<form class="search-form">
											<input class="form-control" name="search" placeholder="Search..." type="text" wire:model="searchTerm">
											<button class="search-btn" type="submit">
											</button>
										</form>
									</div>
								</div>
								<div class="row">
									@foreach($users as $user)
									<div class="container candidates-listing-area">
										<div class="candidates-single-listing">
											<div class="row align-items-center">
												<div class="col-lg-2">
													<div class="hot-jobs-img">
														@if($user->profile->image)
														<img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" alt="Image">
														@else
															<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="Image">
														@endif
													</div>
												</div>

												<div class="col-lg-6">
													<div class="candidates-cv-content">
														<h3>{{$user->name}}</h3>
														@if($user->profile)
															@if($user->profile->position)
															<span class="sub-title">{{$user->profile->position}}</span>
															@else
															Unknown
															@endif
														@else
														Unknown
														@endif
													</div>
												</div>

												<div class="col-lg-4">
													<a href="{{route('admin.single-user-details', ['user_id'=>$user->id])}}" class="default-btn">View Details</a>
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
								<div class="row">
							<div class="col-lg-12 col-md-12">
								{{$users->links()}}
							</div>
						</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									{{$users->links()}}
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>
</div>

