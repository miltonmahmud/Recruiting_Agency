
<div>
	<section class="candidates-dashboard-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<div class="avatar-img">
								@if($user->profile)
									@if($user->profile->image)
								<img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" alt="image" width="130">
								@else
									<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
									@endif
								@else
								<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
								@endif

								<div class="avatar-mane">
									<h4>{{$user->name}}</h4>
									<span>
										@if($user->profile)
										{{$user->profile->position}}
										@else
										Position: Unknown
										@endif
									</span>
								</div>
							</div>

							<ul>
								<li>
									<a href="{{route('user.dashboard')}}" class="active">Dashboard</a>
								</li>
								<li>
									<a href="{{route('user.profile')}}">Profile</a>
								</li>
								<li>
									<a href="{{route('user.resume')}}">My Resume</a>
								</li>
								<li>
									<a href="{{route('user.applied-jobs')}}">All Applied Jobs</a>
								</li>
								<li>
									<a href="{{route('user.change-password')}}">Change Password</a>
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
								<h3>Candidate Dashboard</h3>

								<div class="row">
									<div class="col-lg-4">
										<div class="single-work-view">
											<span>24</span>
											<h3>Total Jobs Applied</h3>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="single-work-view">
											<span>362</span>
											<h3>Total Job Views of Viewer</h3>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="single-work-view">
											<span>43</span>
											<h3>Total Applications</h3>
										</div>
									</div>
								</div>
							</div>

							<div class="recent-activities">
								<h3>Recent Activities</h3>

								<ul class="activities">
									<li>
										Your Job UX/UI Designer Has Been Approved! 
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Timothy Demers Has Sent You Private Message!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Your Job Listing Web Designer is Expiring!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Someone Bookmarked Your Project Manager Job! 
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										You Have New Application for Research Assistant!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Terrance Hartman Left a Review Your Job!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Your Job Content Writing Has Been Approved! 
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Someone Bookmarked Your Support Executive Job!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Anderson Lara Has Sent You Private Message!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
									<li>
										Donal Henri Smith Left a Review Your Job!
										<a href="#"><i class="bx bx-x"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

