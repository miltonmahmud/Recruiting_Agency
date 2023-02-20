
<div>
	<div>
		<section class="candidates-dashboard-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<div class="avatar-img">
								@if($employer->profile)
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
									<a href="{{route('employer.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('employer.profile')}}" class="active">Profile</a>
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

					<div class="col-lg-8">
						<div class="candidates-profile-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<div class="avatar-img">
												@if($employer->profile)
													@if($employer->profile->image)
												<img src="{{asset('assets/images/profile')}}/{{$employer->profile->image}}" alt="image" width="130" style="margin-bottom: 20px;">
												@else
													<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130" style="margin-bottom: 20px;">
													@endif
												@else
												<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130" style="margin-bottom: 20px;">
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<p><b>Name:</b> {{$employer->name}}</p>
									        <p><b>Position:</b> {{$employer->profile->position}}</p>
									        <p><b>Country:</b> {{$employer->profile->country}}</p>
									        <p><b>City:</b> {{$employer->profile->city}}</p>
										</div>
										<div class="col-lg-4">
										    <p><b>Email:</b> {{$employer->email}}</p>
											<p><b>Phone:</b> {{$employer->profile->phone}}</p>
											<p><b>Region:</b> {{$employer->profile->region}}</p>
											<p><b>Post Code:</b> {{$employer->profile->post_code}}</p>
										</div>
									</div>
									<hr>
									<p><b>Description:</b> {{$employer->profile->description}}</p>
									
									
									
									
									<p><b>Address:</b> {{$employer->profile->address}}</p>
									<a href="{{route('employer.edit-profile')}}" class="btn btn-info" style="margin-bottom: 20px;">Update Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>