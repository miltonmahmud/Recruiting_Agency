
<div>

	<style>
		
		.candidates-dashboard-content .candidates-dashboard .single-work-view {
		    margin-bottom: 15px;
		}

			.default-btn {
				min-width: 90s%; 
				
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
									<a href="{{route('admin.posted-jobs')}}">All Jobs List</a>
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
									<a href="{{route('admin.all-clients')}}" class="active">All Clients</a>
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
									<div class="col-lg-8">
										<h3 style="margin-top: 10px;">All Clients</h3>
									</div>
									<div class="col-lg-4">
										<a href="{{route('admin.add-client')}}" class="default-btn float-right" style="margin-bottom: 0 !important;">Add Client</a>
									</div>
								</div>
								<hr>

								<div class="row">
									@foreach($clients as $client)
									<div class="col-lg-4">
										<div class="single-work-view">
											<img src="{{asset('assets/images/client')}}/{{$client->image}}" alt="Image">
										</div>
											<a href="" wire:click.prevent="deleteConfirmation({{$client->id}})" class="default-btn btn-block" style="margin-bottom: 40px; background-color: #cd0d5d;" style="min-width: 100%;">Delete</a>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

