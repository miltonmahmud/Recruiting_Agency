
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
									<a href="{{route('admin.all-settings')}}" class="active">All Settings</a>
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
								<h3>All Settings</h3>

								<div class="row">
									<div class="col-lg-12">
		                              <form wire:submit.prevent="saveSettings">
		                              	<div class="mb-3">
		                                    <label class="form-label">Phone</label>
		                                        <input type="text" placeholder="Phone" class="form-control input-md" wire:model="phone" />
		                                        @error('phone') 
		                                          <p class="text-danger">{{$message}}</p> 
		                                        @enderror
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Email</label>
		                                        <input type="email" placeholder="Email" class="form-control input-md" wire:model="email" />
		                                        @error('email') 
		                                          <p class="text-danger">{{$message}}</p> 
		                                        @enderror
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Address</label>
		                                        <input type="text" placeholder="Address" class="form-control input-md" wire:model="address" />
		                                        @error('address') 
		                                          <p class="text-danger">{{$message}}</p> 
		                                        @enderror
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Map</label>
		                                        <input type="text" placeholder="Map" class="form-control input-md" wire:model="map" />
		                                        @error('map') 
		                                          <p class="text-danger">{{$message}}</p> 
		                                        @enderror
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Facebook</label>
		                                        <input type="text" placeholder="Map" class="form-control input-md" wire:model="facebook" />
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Instagram</label>
		                                        <input type="text" placeholder="Map" class="form-control input-md" wire:model="instagram" />
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Linkedin</label>
		                                        <input type="text" placeholder="Map" class="form-control input-md" wire:model="linkedin" />
		                                </div>
		                                <div class="mb-3">
		                                    <label class="form-label">Twitter</label>
		                                        <input type="text" placeholder="Map" class="form-control input-md" wire:model="twitter" />
		                                </div>
		                                <div class="mb-3 d-grid">
		                                    <label></label>
		                                    <button type="submit" class="default-btn btn-lg">Submit</button>
		                                </div>
		                           </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

