<div>
    
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
									<a href="{{route('employer.all-job-post')}}"  class="active">All Posted Jobs</a>
								</li>
								<li>
									<a href="{{route('employer.all-applicants')}}">All Applicants</a>
								</li>
								<li>
									<a href="{{route('employer.all-messages')}}">All Messages</a>
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
					<div class="col-lg-12">
						@foreach($all_Job_Posts as $all_Job_Post)
							<div class="hot-jobs-list">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<a href="{{route('employer.job-details', ['Post_id'=>$all_Job_Post->id])}}" class="hot-jobs-img">
											<img src="{{asset('assets/images/hot-jobs/hot-jobs-1.png')}}" alt="Image">
										</a>
									</div>

									<div class="col-lg-6">
										<div class="hot-jobs-content">
											<h3><a href="{{route('employer.job-details', ['Post_id'=>$all_Job_Post->id])}}">{{$all_Job_Post->title}}</a></h3>
											<span class="sub-title">Finix loans & funding agency</span>
											<ul>
												<li><span>Location: </span>New York</li>
											</ul>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="hot-jobs-btn">
											<a href="{{route('employer.job-details', ['Post_id'=>$all_Job_Post->id])}}" class="default-btn">Browse Job</a>
											<p><span>Deadline: </span>Dec 30, 2020</p>
										</div>
									</div>
								</div>
							</div>
						@endforeach


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
