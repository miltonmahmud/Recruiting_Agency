
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
									<a href="{{route('admin.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('admin.all-employers')}}" class="active">All Employers</a>
								</li>
								<li>
									<a href="{{route('admin.all-applicants')}}">All Applicants</a>
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
							<form class="profile-info">
								<h3>Employe Details </h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>First Name</label>
											<input class="form-control" type="text" name="First-Name">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Last Name</label>
											<input class="form-control" type="text" name="Last-Name">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" name="Email">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Phone</label>
											<input class="form-control" type="text" name="Phone">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Category</label>
											<input class="form-control" type="text" name="Category">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Language</label>
											<select>
												<option value="1">English</option>
												<option value="2">العربيّة</option>
												<option value="2">Flag Germany</option>
												<option value="3">Flag Português</option>
												<option value="4">简体中文</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Job Description</label>
											<textarea name="message" class="form-control" rows="6"></textarea>
										</div>
									</div>
								</div>

								<h3>Address</h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Country</label>
											<input class="form-control" type="text" name="Country">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Region</label>
											<input class="form-control" type="text" name="Region">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>City</label>
											<input class="form-control" type="email" name="City">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Post Code</label>
											<input class="form-control" type="text" name="Post-Code">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Full Address</label>
											<input class="form-control" type="text" name="Category">
										</div>
									</div>

									<div class="col-lg-12">
										<a href="#" class="default-btn">Save</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

