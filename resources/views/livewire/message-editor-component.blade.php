
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
									<a href="{{route('admin.dashboard')}}" class="active">Dashboard</a>
								</li>
								<li>
									<a href="{{route('admin.all-employers')}}">All Employers</a>
								</li>
								<li>
									<a href="{{route('admin.all-applicants')}}">All Applicants</a>
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
									<a href="{{route('admin.all-faqs')}}">All FAQs</a>
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
					<h3 class="job-info-title">Create A Message</h3>
				<div class="job-information">

					@php
						$receiver = App\Models\User::where('id',$user_id)->first();
					@endphp

					<form action="" wire:submit.prevent="send_message">
						<div class="row">

							<div class="col-lg-6">
							<p><b>Send To:</b>  {{$receiver->profile->first_name}} {{$receiver->profile->last_name}}</p>
									<input class="form-control" type="hidden" wire:model="user_id">
							</div>


							<div class="col-lg-12">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" type="text" wire:model="subject">
									@error('subject') <p class="text-danger">{{$message}}</p> @enderror
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
									Send Message
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
