
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
								@if($user)
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

					<div class="col-lg-8">
						<div class="row">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<form class="search-job">
											<input class="form-control" name="search" placeholder="Search here ... Job title, country or region" type="text" wire:model="searchTerm">
											<button class="search-btn" type="submit">
											</button>
										</form>
									</div>
								</div>
								<div class="row">
									@foreach($users as $muser)
									<div class="container candidates-listing-area">
										<div class="candidates-single-listing">
											<div class="row align-items-center">
												<div class="col-lg-2">
													<div class="hot-jobs-img">
														@if($muser)
															@if($muser->image)
															<img src="{{asset('assets/images/profile')}}/{{$muser->image}}" alt="Image" style="border-radius: 50px;">
															@else
																<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="Image">
															@endif
														@else
															<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="Image">
														@endif
													</div>
												</div>

												<div class="col-lg-3">
													<div class="candidates-cv-content">
														<h3>{{$muser->name}}</h3>
														@if($muser)
															@if($muser->position)
															<span class="sub-title"><b>{{$muser->position}}</b></span>
															@else
															Unknown
															@endif
														@else
														Unknown
														@endif
														<br>

														@if($muser)
															@if($muser->country)
															<span class="sub-title">{{$muser->country}}</span>
															@else
															Unknown
															@endif
														@else
														Unknown
														@endif
													</div>
												</div>

												<div class="col-lg-3">
													@if($muser)
															@if($muser->region)
															<span class="sub-title"><b>{{$muser->region}}</b></span>
															@else
															Unknown
															@endif
														@else
														Unknown
														@endif
												</div>

												<div class="col-lg-4">
													<a href="{{route('employer.view-applicant-details', ['applicant_id'=>$muser->id])}}" class="default-btn">View Details</a>
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
								<div class="row">
							<div class="col-lg-12 col-md-12">
								{{$users->links()}}
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>