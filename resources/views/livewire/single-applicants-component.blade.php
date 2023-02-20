
<div>
	<section class="candidates-details-area ptb-70">
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
						<div class="candidates-cv">
							<div class="row align-items-center">
								<div class="col-lg-4">
									<div class="hot-jobs-img">
										<img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" alt="Image">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="candidates-cv-content">
										<span class="text-center">{{$user->resume->nationality}}</span>
									</div>
								</div>

								<div class="col-lg-4">
									
									<h4>{{$user->resume->first_name}} {{$user->resume->last_name}}</h4>
										<span class="sub-title">{{$user->email}}</span>
								</div>
							</div>
						</div>

						<div class="candidates-details-content">
							<div class="row">
								<div class="col-lg-12">
									<h5><b>Position Applied:</b> {{$user->resume->position}}</h5><hr>
								</div>
								<div class="col-lg-6">
									<p><b>First name:</b> {{$user->resume->first_name}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Last name:</b> {{$user->resume->last_name}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Email:</b> {{$user->resume->email}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Phone:</b> {{$user->resume->phone}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Date of birth:</b> {{$user->resume->date_of_birth}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Gender:</b> {{$user->resume->gender}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Maritial status:</b> {{$user->resume->maritial_status}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Religion:</b> {{$user->resume->religion}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Nationality:</b> {{$user->resume->nationality}}</p><br>	
								</div>
								<div class="col-lg-12">
								<p><b>Address:</b> {{$user->resume->address}}</p><br>
								</div>
								<div class="col-lg-12">
									<p><b>Objective:</b> {{$user->resume->objective}}</p><br>
								</div>
								<div class="col-lg-12">
									<h5>Education</h5><hr>
								</div>
								<div class="col-lg-6">
									<p><b>Level of education:</b> {{$user->resume->level_of_education}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Degree title:</b> {{$user->resume->degree_title}}</p>
								</div>
								<div class="col-lg-6">
								<p><b>Major:</b> {{$user->resume->major}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Institute:</b> {{$user->resume->institute}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Result:</b> {{$user->resume->result}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Year of passing:</b> {{$user->resume->year_of_passing}}</p><br>
							</div>
							<div class="col-lg-12">
								<h5>Work Experience</h5><hr>
							</div>
							<div class="col-lg-6">
								<p><b>Company:</b> {{$user->resume->company_name}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Business:</b> {{$user->resume->company_business}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Designation:</b> {{$user->resume->designation}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Department:</b> {{$user->resume->department}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Responsibilities:</b> {{$user->resume->responsibilities}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Company Location:</b> {{$user->resume->company_location}}</p>
							</div>
							<div class="col-lg-6">
								<p><b>Employment Period:</b> {{$user->resume->employment_year}} Year {{$user->resume->employment_month}} Months</p>
							</div>
								</div>
							</div>	

						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
</div>

