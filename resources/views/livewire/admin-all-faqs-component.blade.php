
<div>

	<style>
		
		.candidates-listing-area .candidates-single-listing {
		    padding: 30px;
		    background-color: #ffffff;
		    -webkit-box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
		    box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
		    -webkit-transition: all ease 0.5s;
		    transition: all ease 0.5s;
		    margin-bottom: 30px;
		    overflow: hidden;
		    position: relative;
		    border-radius: 0;
		}

		.candidates-listing-area .candidates-single-listing .hot-jobs-img img {
		    border-radius: 0;
		}

		.default-btn {
			min-width: 190px !important;
			margin: 3px 0;
		}



	</style>

	<style>
		.main-btn {
		    background-color: #cd0d5d;
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
									<a href="{{route('admin.all-faqs')}}" class="active">All FAQs</a>
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
										<h3 class="mt-2">All Faqs</h3>
									</div>
									<div class="col-lg-6">
										<a href="{{route('admin.create-faq')}}" class="default-btn float-right">Create Faqs</a>
									</div>
							   </div>
							<hr>
							</div>

								@foreach($faq as $faq)
								<div class="container candidates-listing-area">
										<div class="candidates-single-listing">
							<div class="row align-items-center job-information">
									<div class="row align-items-center">
										<div class="col-lg-8">
											<div class="candidates-cv-content">
												<h3>{{$faq->subject}}</h3>
												<span class="sub-title">{{$faq->description}}</span>
											</div>
										</div>

										<div class="col-lg-4">
											<a href="{{route('admin.update-faq', ['faq_id'=> $faq->id])}}" class="default-btn">Update</a>
											<a href="" wire:click.prevent="deleteConfirmation({{$faq->id}})" class="default-btn main-btn">Delete</a>
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
		</section>
</div>

