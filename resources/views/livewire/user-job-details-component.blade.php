
<div>

	<style>
		.default-btn {
			background-color: #0b8fad;
			min-width: 158px;
		}
	</style>
	
	<div>
		<section class="job-details-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<div class="avatar-img">
								<img src="{{asset('assets/images/avatar-img.jpg')}}" alt="Image">

								<div class="avatar-mane">
									<h4>Randall Guerrero</h4>
									<span>UX/UI Designer</span>
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
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3>Finance & Accounts</h3>
										<span class="sub-title">Finix loans & funding agency</span>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="hot-jobs-content">
										<span class="sub-title text-center">Melborne</span>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="#" class="default-btn">Apply Now</a>
										<p><span>Applied: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>

						<div class="job-details-content">
							<div>
								<h3>Job Description</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur</p>

							<h4>Responsibilities:</h4>

							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aspernatur modi doloribus dolorem quidem! Neque placeat numquam vel magni ipsam, similique eligendi sunt laudantium, nihil alias soluta eos in Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nam eveniet quasi.</p>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
							</ul>

							<h4>Qualifications:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
							</ul>

							<h4>Competencies:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua.</li>
							</ul>

							<h4>Experience Requirements:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>