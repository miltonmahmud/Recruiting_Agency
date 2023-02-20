
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
									<a href="{{route('employer.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('employer.all-messages')}}" class="active">All Messages</a>
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
						<div class="candidates-message-content">
							<h3>Inbox</h3>

							<div class="message-content">
								<div class="row">
									<div class="col-lg-12">
										<div class="message-list">
											<ul>
												<li>
													<a href="{{route('employer.single-message')}}">
														<img src="{{asset('assets/images/message/message-1.jpg')}}" alt="Image">
														<h4>Jon Smith <span>1 hour</span></h4>
														<p>Hi, Randall! How are you?</p>
													</a>
												</li>

												<li>
													<a href="#">
														<img src="{{asset('assets/images/message/message-2.jpg')}}" alt="Image">
														<h4>Randall <span>5 hours</span></h4>
														<p>Hi, Smith! How are you?</p>
													</a>
												</li>

												<li>
													<a href="#">
														<img src="{{asset('assets/images/message/message-3.jpg')}}" alt="Image">
														<h4>Guerrero <span>30.10.2020</span></h4>
														<p>Hi, Robarto! How are you?</p>
													</a>
												</li>

												<li>
													<a href="#">
														<img src="{{asset('assets/images/message/message-4.jpg')}}" alt="Image">
														<h4>Robarto <span>29.11.2020</span></h4>
														<p>Hi, Makely! How are you?</p>
													</a>
												</li>

												<li>
													<a href="#">
														<img src="{{asset('assets/images/message/message-5.jpg')}}" alt="Image">
														<h4>Makely <span>28.10.2020</span></h4>
														<p>Hi, Guerrero! How are you?</p>
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