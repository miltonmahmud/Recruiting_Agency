
<div>
	<div>
		<section class="candidates-dashboard-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<h3>Share This Job</h3>

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
									<a href="{{route('user.all-messages')}}" class="active">All Messages</a>
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
						<div class="candidates-message-content">
							<div class="message-content">
								<div class="row">
									<div class="col-lg-12">
										<div class="message-list">
											<ul>
												<li>
													<a href="#">
														<img src="{{asset('assets/images/message/message-1.jpg')}}" alt="Image">
														<h4>Jon Smith <span>1 hour</span></h4>
														<p style="min-height: 200px; ">Hi, Randall! How are you?</p>
													</a>
												</li>
											</ul>
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