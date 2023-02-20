
<div>
	<div>
		<section class="candidates-dashboard-area ptb-100">
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
									@if($user->profile)
										@if($user->profile->position)
									<span>{{$user->profile->position}}</span>
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
									<a href="{{route('employer.profile')}}">Profile</a>
								</li>
								<li>
									<a href="{{route('employer.change-password')}}"  class="active">Change Password</a>
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
						<div class="candidates-change-password-content">
							<h3>Change Password</h3>
							<p>Here you can change your password please fill up the form.</p>

							@if(Session::has('password_success'))
                                  <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                            @endif

                            @if(Session::has('password_error'))
                                  <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                            @endif

							<form action="" wire:submit.prevent="changePassword">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Old Password</label>
											<input class="form-control" placeholder="Current Password" type="password" name="current_password" wire:model="current_password">
											@error('current_password') <p class="text-danger">{{$message}}</p> @enderror
										</div>
									</div>
	
									<div class="col-lg-12">
										<div class="form-group">
											<label>New Password</label>
											<input class="form-control" placeholder="New Password" type="password" name="password" wire:model="password">
											@error('password') <p class="text-danger">{{$message}}</p> @enderror
											<i class="bx bxs-low-vision"></i>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Confirm Password</label>
											<input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" wire:model="password_confirmation">
											<i class="bx bxs-low-vision"></i>
										</div>
									</div>
									
									<div class="col-lg-12">
										<button class="default-btn">
											Update
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>