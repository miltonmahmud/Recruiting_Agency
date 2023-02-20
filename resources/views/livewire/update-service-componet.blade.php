
<div>

	<style>
		
		.job-information {
			background-color: #ffffff;
    -webkit-box-shadow: 0px 5px 20px 3px rgb(230 233 249 / 90%);
    box-shadow: 0px 5px 20px 3px rgb(230 233 249 / 90%);
		}

		.job-info-title {
			font-size: 24px;
			padding: 15px 30px;
		    background-color: #f0f0fa;
		    margin-bottom: 0;
		}

		.tox-tinymce {
          border-radius: 5px;
        }

        /*.tox-menubar,
        .tox-statusbar {
          display: none !important;
        }*/

        .tox .tox-edit-area__iframe,
        .form-control {
            background-color: #f1f4ff !important;
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
									<a href="{{route('admin.all-services')}}" class="active">All Services</a>
								</li>
								<li>
									<a href="{{route('admin.all-settings')}}">All Settings</a>
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
								<h3>Create New Service</h3>
							</div>

							<div class="job-information">
								<form action="" wire:submit.prevent="updateService">
									<div class="row">

										<div class="col-lg-12">
											<div class="form-group">
												<label>Icon</label>
												<input class="form-control" type="text" wire:model="icon">
												@error('icon') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Title</label>
												<input class="form-control" type="text" wire:model="title">
												@error('title') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Description</label>
												<textarea name="message" id="description" class="form-control" rows="10" wire:model="description"></textarea>
												@error('description') <p class="text-danger">{{$message}}</p> @enderror
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button class="default-btn" type="submit">
												Update
											</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

