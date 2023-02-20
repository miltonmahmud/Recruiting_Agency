<div>
    <footer class="footer-area footer-area-two pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget single-bg">
								<h2 style="color: #fff !important;">Agency</h2>

							<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur.</p>

							<ul class="social-icon">
								<li>
									<a href="{{$settings->facebook}}">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="{{$settings->instagram}}">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="{{$settings->linkedin}}">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="{{$settings->twitter}}">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Contact</h3>

							<ul class="address">
								<li>
									<i class="bx bx-phone-call"></i>
									<span>Phone:</span>
									<a href="tel:+1-(514)-7939-357">{{$settings->phone}}</a>
								</li>
								<li>
									<i class="bx bx-envelope"></i>
									<span>Email:</span>
									<a href=""><span>{{$settings->email}}</span></a>
								</li>
								<li class="location">
									<i class="bx bx-location-plus"></i>
									<span>Address:</span>
									{{$settings->address}}
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Helpful Resources</h3>

							<ul class="import-link">
								<li>
									<a href="{{route('login')}}">Create Account</a>
								</li>
								<li>
									<a href="{{route('contact')}}">Contact Us</a>
								</li>
								<li>
									<a href="#">Terms of Use</a>
								</li>
								<li>
									<a href="#">Privacy Centre</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Job Seekers</h3>

							<ul class="import-link">
								<li>
									<a href="{{route('login')}}">Create Account</a>
								</li>
								<li>
									<a href="{{route('job-openings')}}">Browse Jobs</a>
								</li>
								<li>
									<a href="#">Upload CV</a>
								</li>
								<li>
									<a href="{{route('faq')}}">FAQ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
</div>
