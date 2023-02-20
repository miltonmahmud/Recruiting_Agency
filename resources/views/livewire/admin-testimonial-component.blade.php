
<div>

	<style>
		.main-btn {
		    background-color: #cd0d5d;
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
									<a href="{{route('admin.all-testimonials')}}" class="active">All Testimonials</a>
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
						<div class="candidates-dashboard-content">
							<div class="candidates-dashboard">
								<div class="row">
									<div class="col-lg-6">
										<h3>All Testimonials</h3>
									</div>
									<div class="col-lg-6">
										<a href="{{route('admin.create-testimonial')}}" class="default-btn float-right">Create New</a>
									</div>
								</div>

								<div class="row mt-3">
									@foreach($testimonials as $testimonial)
									<div class="container candidates-listing-area">
										<div class="candidates-single-listing">
											<div class="row align-items-center">
												<div class="col-lg-2">
													<div class="hot-jobs-img">
														<img src="{{asset('assets/images/testimonials')}}/{{$testimonial->image}}" alt="Image" width="69px">
													</div>
												</div>

												<div class="col-lg-6">
													<p>{{$testimonial->comment}}</p>
												</div>

												<div class="col-lg-4">
													<div class="candidates-cv-content">
														<h3>{{$testimonial->name}}</h3>
														<span class="sub-title">{{$testimonial->position}}</span>
														<a href="" wire:click.prevent="deleteConfirmation({{$testimonial->id}})" class="default-btn float-left mt-2 main-btn" style="min-width: 190px;">Delete</a>
													</div>
												</div>

											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
</div>

