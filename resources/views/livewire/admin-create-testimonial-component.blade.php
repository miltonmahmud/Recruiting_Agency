
<div>

	<div>
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
									<a href="{{route('admin.all-testimonials')}}" class="active">All Testimonials</a>
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
							</ul>i>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
					<h3 class="job-info-title">Create A Testimonial</h3>
				<div class="job-information">
					@if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}
                      </div>
                    @endif

					<form action="" wire:submit.prevent="addTestimonial">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" wire:model="name">
									@error('name') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Image</label>
									<input class="form-control" type="file" wire:model="image" />
									@if($image)
                                      <img src="{{$image->temporaryUrl()}}" width="60" />
                                    @endif
									@error('image') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Position</label>
									<input class="form-control" type="text" wire:model="position">
									@error('position') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Comment</label>
									<textarea class="form-control" type="text" wire:model="comment" rows="7"></textarea>
									@error('comment') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-12">
								<button class="default-btn" type="submit">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
				</div>
			</div>
		</section>
	</div>
</div>
