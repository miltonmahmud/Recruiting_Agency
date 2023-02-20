		
<div>

	<style>
		.main-btn {
		    background-color: #cd0d5d;
		}
	</style>
	
	<section class="job-details-area ptb-70">
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
						<div class="hot-jobs-list">
							<div class="row align-items-center">

								<div class="col-lg-4">
									<div class="hot-jobs-content">
										<h3>{{$title}}</h3>
										<span class="sub-title">{{$industry}}</span>
									</div>
								</div>
								<div class="col-lg-4">
									<span>Location:</span> {{$location}}
									<p><span>Deadline: </span>{{date($deadline)}}</p>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('admin.job-post-update', ['post_id'=>$post_update_id])}}" class="default-btn float-right" style="max-width: 158px;">Update</a>
										<a href="" wire:click.prevent="deleteConfirmation({{$post_update_id}})" class="default-btn float-right main-btn" style="max-width: 158px;">Delete</a>
									</div>
								</div>
							</div>
						</div>

						<div class="job-details-content">
							<div>
								{!!$description!!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

