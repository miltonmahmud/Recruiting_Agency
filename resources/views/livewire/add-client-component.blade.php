
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
					<h3 class="job-info-title">Update Banner</h3>
				<div class="job-information">
					@if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}
                      </div>
                    @endif

					<form action="" wire:submit.prevent="addClient">
						<div class="row">

							<div class="col-lg-12">
								<div class="form-group">
									<label>Image</label>
									<input class="form-control" type="file" wire:model="image">
									@if($image)
                                      <img src="{{$image->temporaryUrl()}}" width="190px" />
                                    @endif
                                    @error('image') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label>Company Name</label>
									<input class="form-control" type="text" wire:model="company_name">
									@error('company_name') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<button class="default-btn" type="submit">
									Add Client
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

