
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
									<a href="{{route('admin.about-section')}}" class="active">About Section</a>
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
								<h3>About Section</h3>

								<div class="row">
									<div class="container">
										<div class="job-information">
								<form action="" wire:submit.prevent="updateAbout">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label class="form-label">Headline</label>
												<input class="form-control" type="text" wire:model="headline">
												@error('headline') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Image</label>
												<input class="form-control" type="file" wire:model="newimage">
												@if($newimage)
	                                              <img src="{{$newimage->temporaryUrl()}}" width="60" />
	                                            @else
	                                              <img src="{{asset('assets/images/about')}}/{{$image}}" width="60" />
	                                            @endif
												@error('image') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Description</label>
												<textarea name="message" id="description" class="form-control" rows="5" wire:model="description"></textarea>
												@error('description') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Left Sub-Headline</label>
												<input class="form-control" type="text" wire:model="left_subheadline">
												@error('left_subheadline') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Left Description</label>
												<textarea class="form-control" type="text" wire:model="left_description" rows="5"></textarea>
												@error('left_description') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Right Sub-Headline</label>
												<input class="form-control" type="text" wire:model="right_subheadline" rows="5">
												@error('right_subheadline') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Right Description</label>
												<textarea class="form-control" type="text" wire:model="right_description" rows="5"></textarea>
												@error('right_description') <p class="text-danger">{{$message}}</p> @enderror
											</div>
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
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

