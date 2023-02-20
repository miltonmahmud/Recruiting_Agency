<div>

	<style>
		
		.single-freelancer {
			padding: 20px !important;
		}

	</style>
    
<div>
	<div>
		<section class="candidates-dashboard-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<h3>Share This Job</h3>

							<div class="avatar-img">
								<img src="{{asset('assets/images/avatar-img.jpg')}}" alt="Image">

								<div class="avatar-mane">
									<h4>Randall Guerrero</h4>
									<span>UX/UI Designer</span>
								</div>
							</div>

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
									<a href="{{route('admin.all-applicants')}}" class="active">All Applicants</a>
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
									@foreach($applicants as $applicant)
									<div class="col-lg-4 col-sm-6">
										<div class="single-freelancer">
											<img src="{{asset('assets/images/freelancer/freelancer-2.jpg')}}" alt="Image">
											<h3>Jean Burke</h3>
											<span class="profession">Software Engineer</span>

											<a href="{{route('employer.applied-applicants-details')}}" class="default-btn">
												View Details
											</a>
										</div>
									</div>
									@endforeach
								</div>
								<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="pagination-area">
									<span class="page-numbers current" aria-current="page">1</span>
									<a href="#" class="page-numbers">2</a>
									<a href="#" class="page-numbers">3</a>
									
									<a href="#" class="next page-numbers">
										<i class="flaticon-right-arrow"></i>
									</a>
								</div>
							</div>
						</div>
							</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
