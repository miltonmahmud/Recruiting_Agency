
<div>
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
									<span>{{$user->profile->position}}</span>
								</div>
							</div>

							<ul>
								<li>
									<a href="{{route('user.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('user.profile')}}" class="active">Profile</a>
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
						<div class="candidates-profile-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<div class="avatar-img">
												@if($user->profile)
													@if($user->profile->image)
												<img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" alt="image" width="130" style="margin-bottom: 20px;">
												@else
													<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130" style="margin-bottom: 20px;">
													@endif
												@else
												<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130" style="margin-bottom: 20px;">
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<p><b>Name:</b> {{$user->name}}</p>
									        <p><b>Position:</b> {{$user->profile->position}}</p>
									        <p><b>Country:</b> {{$user->profile->country}}</p>
									        <p><b>City:</b> {{$user->profile->city}}</p>
										</div>
										<div class="col-lg-4">
										    <p><b>Email:</b> {{$user->email}}</p>
											<p><b>Phone:</b> {{$user->profile->phone}}</p>
											<p><b>Region:</b> {{$user->profile->region}}</p>
											<p><b>Post Code:</b> {{$user->profile->post_code}}</p>
										</div>
									</div>
									<hr>
									<p><b>Description:</b> {{$user->profile->description}}</p>
									
									
									
									
									<p><b>Address:</b> {{$user->profile->address}}</p>
									<a href="{{route('user.edit-profile')}}" class="btn btn-info" style="margin-bottom: 20px;">Update Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>