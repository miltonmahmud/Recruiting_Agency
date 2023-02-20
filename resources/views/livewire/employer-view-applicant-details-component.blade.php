
<div>

	<style>
		
		.default-btn-g {
			background-color: #fff !important;
			color: #333;
		}

		.default-btn-g:hover {
			background-color: #fff !important;
			color: #333;
		}

		.search-job {
		    background-color: #79b530;
		    padding: 30px;
		    padding-bottom: 0;
		    margin-bottom: 30px;
		}

		.form-control {
			background-color: #fff !important;
			box-shadow: none;
		}

		.search-job {
		    background-color: #0b8fad;
		    padding: 30px;
		    padding-bottom: 0;
		    margin-bottom: 30px;
		}

	</style>

	<div>
		<section class="candidates-dashboard-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<div class="avatar-img">
								@if($employer)
									@if($employer->profile->image)
								<img src="{{asset('assets/images/profile')}}/{{$employer->profile->image}}" alt="image" width="130">
								@else
									<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
									@endif
								@else
								<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
								@endif

								<div class="avatar-mane">
									<h4>{{$employer->name}}</h4>
									@if($employer->profile)
										@if($employer->profile->position)
									<span>{{$employer->profile->position}}</span>
									@else
									<span>Position: Unknown</span>
									@endif

									@else
									<span>Position: Unknown</span>
									@endif

								</div>
							</div>

							<ul>
								<li>
									<a href="{{route('employer.dashboard')}}" class="active">Dashboard</a>
								</li>
								<li>
									<a href="{{route('employer.profile')}}">Profile</a>
								</li>
								<li>
									<a href="{{route('employer.change-password')}}">Change Password</a>
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

					@if($applicant->resume)
					<div class="col-lg-8">
						<div class="candidates-cv">
							<div class="row align-items-center">
								<div class="col-lg-4">
									<div class="hot-jobs-img">
										<img src="{{asset('assets/images/profile')}}/{{$applicant->profile->image}}" alt="Image">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="candidates-cv-content">
										<span class="text-center">{{$applicant->resume->nationality}}</span>
									</div>
								</div>

								<div class="col-lg-4">
									
									<h4>{{$applicant->resume->first_name}} {{$applicant->resume->last_name}}</h4>
										<span class="sub-title">{{$applicant->email}}</span>
								</div>
							</div>
						</div>

						<div class="candidates-details-content">
							<div class="row">
								<div class="col-lg-12">
									<h5><b>Position Applied:</b> {{$applicant->resume->position}}</h5><hr>
								</div>
								<div class="col-lg-6">
									<p><b>First name:</b> {{$applicant->resume->first_name}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Last name:</b> {{$applicant->resume->last_name}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Email:</b> {{$applicant->resume->email}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Phone:</b> {{$applicant->resume->phone}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Date of birth:</b> {{$applicant->resume->date_of_birth}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Gender:</b> {{$applicant->resume->gender}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Maritial status:</b> {{$applicant->resume->maritial_status}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Religion:</b> {{$applicant->resume->religion}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Nationality:</b> {{$applicant->resume->nationality}}</p><br>	
								</div>
								<div class="col-lg-12">
								<p><b>Address:</b> {{$applicant->resume->address}}</p><br>
								</div>
								<div class="col-lg-12">
									<p><b>Objective:</b> {{$applicant->resume->objective}}</p><br>
								</div>
								<div class="col-lg-12">
									<h5>Education</h5><hr>
								</div>
								<div class="col-lg-6">
									<p><b>Level of education:</b> {{$applicant->resume->level_of_education}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Degree title:</b> {{$applicant->resume->degree_title}}</p>
								</div>
								<div class="col-lg-6">
								<p><b>Major:</b> {{$applicant->resume->major}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Institute:</b> {{$applicant->resume->institute}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Result:</b> {{$applicant->resume->result}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Year of passing:</b> {{$applicant->resume->year_of_passing}}</p><br>
								</div>
								<div class="col-lg-12">
									<h5>Work Experience</h5><hr>
								</div>
								<div class="col-lg-6">
									<p><b>Company:</b> {{$applicant->resume->company_name}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Business:</b> {{$applicant->resume->company_business}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Designation:</b> {{$applicant->resume->designation}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Department:</b> {{$applicant->resume->department}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Responsibilities:</b> {{$applicant->resume->responsibilities}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Company Location:</b> {{$applicant->resume->company_location}}</p>
								</div>
								<div class="col-lg-6">
									<p><b>Employment Period:</b> {{$applicant->resume->employment_year}} Year {{$applicant->resume->employment_month}} Months</p>
								</div>
								</div>
							</div>	

						</div>
					</div>
					@endif
					</div>
				</div>
			</div>
		</section>
	</div>
</div>