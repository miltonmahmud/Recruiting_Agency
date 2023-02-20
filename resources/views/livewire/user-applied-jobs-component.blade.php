<div>

	<style>
		.default-btn {
			background-color: #0b8fad;
			min-width: 158px;
		}

		.hot-jobs-list:hover .hot-jobs-content h3 a {
    color: #0b8fad;
}
	</style>
    
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
									<a href="{{route('user.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('user.profile')}}">Profile</a>
								</li>
								<li>
									<a href="{{route('user.resume')}}">My Resume</a>
								</li>
								<li>
									<a href="{{route('user.applied-jobs')}}" class="active">All Applied Jobs</a>
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
						<div class="row">
					<div class="col-lg-12">
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: Melborne</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="{{route('user.job-details')}}">Salesman</a></h3>
										<span class="sub-title">For a reputed Oil Company</span>
									</div>
								</div>

								<div class="col-lg-3 hot-jobs-content">
									<span>Location: New York</span>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('user.job-details')}}" class="default-btn">Browse Job</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="pagination-area">
									<span class="page-numbers current" aria-current="page">1</span>
									<a href="#" class="page-numbers">2</a>
									<a href="#" class="page-numbers">3</a>
									
									<a href="#" class="next page-numbers">
										<i class="flaticon-right-arrow"></i>
									</a>
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
</div>
</div>
