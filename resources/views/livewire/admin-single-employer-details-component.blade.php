
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
									<a href="{{route('admin.all-employers')}}" class="active">All Employers</a>
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
						<div class="candidates-profile-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<div class="avatar-img">
												@if($user->profile)
								                  <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="130" style="margin-bottom: 20px;" />
								                 @else
								                  <img src="{{asset('assets/images/profile/dummy-image.png')}}" width="130" style="margin-bottom: 20px;" />
								                 @endif
											</div>
										</div>
										<div class="col-lg-4">
											<p><b>Name:</b> {{$user->name}}</p>
											@if($user->profile)
									        <p><b>Position:</b> {{$user->profile->position}}</p>
									        @else
									        <p><b>Position: Unknown</p>
									        @endif

									        @if($user->profile)
									        <p><b>Country:</b> {{$user->profile->country}}</p>
									        @else
									        <p><b>Country: Unknown</p>
									        @endif

									        @if($user->profile)
									        <p><b>City:</b> {{$user->profile->city}}</p>
									        @else
									        <p><b>City: Unknown</p>
									        @endif

										</div>
										<div class="col-lg-5">
											
										    <p><b>Email:</b> {{$user->email}}</p>
										    
										    @if($user->profile)
											<p><b>Phone:</b> {{$user->profile->phone}}</p>
											@else
											<p><b>Phone: Unknown</b> </p>
											@endif

											@if($user->profile)
											<p><b>Region:</b> {{$user->profile->region}}</p>
											@else
											<p><b>Region:</b> Unknown</p>
											@endif

											@if($user->profile)
											<p><b>Post Code:</b> {{$user->profile->post_code}}</p>
											@else
											<p><b>Post Code:</b> Unknown</p>
											@endif

										</div>
									</div>
									<hr>
									@if($user->profile)
									<p><b>Description:</b> {{$user->profile->description}}</p>
									@else
									<p><b>Description:</b> Unknown</p>
									@endif
									
									@if($user->profile)
									<p><b>Address:</b> {{$user->profile->address}}</p>
									@else
									<p><b>Address:</b> Unknown</p>
									@endif
									<hr>
									<div class="row">
										@if($user->utype == "USR")
										<div class="col-lg-6">
											<a href="" wire:click.prevent="setEmployer({{$user->id}})" class="default-btn btn-block" style="background-color: #cd0d5d;">Mark as Employer</a>
										</div>
										@elseif($user->utype == "EML")
										<div class="col-lg-6">
											<a href="" wire:click.prevent="setUser({{$user->id}})" class="default-btn btn-block" style="background-color: #cd0d5d;" >Mark as User</a>
										</div>
										@endif

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

