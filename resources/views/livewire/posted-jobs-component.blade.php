
<div>

	<style>
		.hot-jobs-list {
			padding: 15px;
		}

        .tox-statusbar {
          display: none !important;
        }

        .page-item.active .page-link {
		    z-index: 3;
		    color: #fff;
		    background-color: #0b8fad;
		    border-color: #007bff;
		}


	</style>

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
									<a href="{{route('admin.posted-jobs')}}" class="active">All Jobs List</a>
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
						<div class="candidates-dashboard-content">
							<div class="candidates-dashboard">
								<div class="row">
									<div class="col-lg-6">
										<h3 class="mt-2">All Job Post</h3>
									</div>
									<div class="col-lg-6">
										<span class="float-right">{{$posted_jobs->links()}}</span>
									</div>
								</div>
								<hr>
								@foreach($posted_jobs as $posted_job)
									<div class="row">
										<div class="col-lg-12">
											<div class="hot-jobs-list">
												<div class="row align-items-center">
													<div class="col-lg-5">
														<div class="hot-jobs-content">
															<h4><a href="{{route('admin.admin-job-details', ['post_id'=> $posted_job->id])}}">{{$posted_job->title}}</a></h4>
															<span class="sub-title">{{$posted_job->industry}}</span>
														</div>
													</div>
													<div class="col-lg-3 hot-jobs-content">
														<ul>
															<li>{{$posted_job->location}}</li>
														</ul>
													</div>
													<div class="col-lg-4">
														<div class="hot-jobs-btn">
															<a href="{{route('admin.admin-job-details', ['post_id'=>$posted_job->id])}}" class="default-btn">Browse Job</a>
															<p><span>Deadline: </span>{{$posted_job->deadline}}</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
</div>

