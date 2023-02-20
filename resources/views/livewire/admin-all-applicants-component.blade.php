

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
							<div class="col-lg-9">
								<form class="search-form">
									<input class="form-control" name="search" placeholder="Search..." type="text">
									<button class="search-btn" type="submit">
									</button>
								</form>
							</div>
							<div class="col-lg-3">
								<a href="" class="default-btn btn-block" wire:click.prevent="exportIntoExcel" style="background-color: #cd0d5d;">Export All</a>
							</div>
						</div>
						<div class="row">
						@foreach($applicants as $applicant)
						<div class="col-lg-4 col-sm-6">
							<div class="single-freelancer">
								<img src="{{asset('assets/images/freelancer/freelancer-2.jpg')}}" alt="Image">
								<h3>{{$applicant->first_name}} {{$applicant->last_name}}</h3>
								<span class="profession">{{$applicant->position}}</span>

								<a href="{{route('admin.single-applicants', ['applicant_id'=>$applicant->user_id])}}" class="default-btn btn-two">
									View Details
								</a>
							</div>
						</div>
						@endforeach
					</div>

				</div>
			</div>
	</section>
</div>

