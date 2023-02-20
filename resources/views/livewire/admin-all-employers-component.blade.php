
<div>
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
									<a href="{{route('admin.all-employers')}}" class="active">All Employers</a>
								</li>
								<li>
									<a href="{{route('admin.all-applicants')}}">All Applicants</a>
								</li>
								<li>
									<a href="{{route('admin.all-users')}}">All Users</a>
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
									@foreach($employers as $employer)
									<div class="col-lg-4 col-sm-6">
										<div class="single-freelancer">
											@if($employer->profile)
											<img src="{{asset('assets/images/profile')}}/{{$employer->profile->image}}" alt="Image" width="115">
											@else
												<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="Image" width="115">
											@endif
											<h5>{{$employer->name}}</h5>

											<span class="profession" style="margin-bottom: 10px;">
												@if($employer->profile)
													{{$employer->profile->position}}
												@else
													Unknown
												@endif
											</span>

											<a href="{{route('admin.single-employer-details', ['user_id'=>$employer->id])}}" class="default-btn">
												View Details
											</a>
										</div>
									</div>
									@endforeach
								</div>
								{{$employers->links()}}
							</div>
					</div>

				</div>
			</div>
		</section>
</div>

