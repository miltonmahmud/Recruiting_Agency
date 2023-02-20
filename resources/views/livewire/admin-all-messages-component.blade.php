

<div>

	<style>

		.hot-jobs-list {
			padding: 15px;
		}

		span {
			margin-bottom: 10px;
		}

		.page-item.active .page-link {
		    z-index: 3;
		    color: #fff;
		    background-color: #0b8fad;
		    border-color: #0b8fad;
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
									<a href="{{route('admin.all-messages')}}" class="active">All Messages</a>
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
						<div class="">
							<div class="row">
								<div class="col-lg-6">
									<h3>All Messages</h3>
								</div>
								<div class="col-lg-6">
									<div class="float-right">{{$messages->links()}}</div>
								</div>
							</div>
							<hr>

								@foreach($messages as $message)
							<div class="hot-jobs-list">
								<div class="row align-items-center">
									<div class="col-lg-4">
										<span><b>Name:</b></span> {{$message->name}}</span><br>
										<span><b>Email: </b>{{$message->email}}</span><br>
										<span><b>Phone: </b>{{$message->phone}}</span><br>
										<span><b>Time: </b>{{$message->created_at}}</span>
									</div>
									<div class="col-lg-8" style="border-left: 1px solid #eee;">
										<h4>{{$message->subject}}</h4>
										<p>{{$message->message}}</p>
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

