
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
									<a href="{{route('admin.change-password')}}" class="active">Change Password</a>
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
											<input class="form-control" placeholder="New Password" type="password" name="password" wire:model="password" >
											@error('password') <p class="text-danger">{{$message}}</p> @enderror
											<i class="bx bxs-low-vision"></i>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Confirm Password</label>
											<input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" wire:model="password_confirmation" >
											@error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
											<i class="bx bxs-low-vision"></i>
										</div>
									</div>
									
									<div class="col-lg-12">
										<button class="default-btn" type="submit">
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

