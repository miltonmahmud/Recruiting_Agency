
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
					<h3 class="job-info-title">Update Job Post</h3>
				<div class="job-information">
					@if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}
                      </div>
                    @endif

					<form action="" wire:submit.prevent="updatePost">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Job title*</label>
									<input class="form-control" type="text" wire:model="title">
									@error('title') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Company Industry</label>
									<input class="form-control" type="text" wire:model="industry">
									@error('industry') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Location</label>
									<input class="form-control" type="text" wire:model="location">
									@error('location') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>

							<div class="col-lg-6 col-md-6" wire:ignore>
								<div class="form-group">
									<label>Job Types</label>
									<select wire:model="job_type" class="form-control">
										<option value="fullTime">Full Time</option>
										<option value="partTime">Part Time</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6" wire:ignore>
								<div class="form-group">
									<label>Application Deadline</label>
									<div class="input-group">
										<input type="text" class="form-control" id="deadline" wire:model="deadline">
										@error('deadline') <p class="text-danger">{{$message}}</p> @enderror
									</div>	
								</div>
							</div>

							<div class="col-lg-12" wire:ignore>
								<div class="form-group">
									<label>Job Description*</label>
									<textarea name="message" id="description" class="form-control" rows="15" wire:model="description"></textarea>
									@error('description') <p class="text-danger">{{$message}}</p> @enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<button class="default-btn" type="Update">
									Update
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

@push('scripts')

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.tiny.cloud/1/4kwhiuae9ur1blfbr6mga6srqo0b4t2v0ag6no06ajzjvira/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
      flatpickr("#deadline", {
        enableTime: false,
    dateFormat: "Y-m-d",
      });
  </script>

  
	<script>
	    $(function(){
	        tinymce.init({
	            selector: '#description',
	            plugins: 'lists',
	            toolbar: 'numlist bullist',
				lists_indent_on_tab: false,
	            setup:function(editor){
	               editor.on('Change', function(e){
	                    tinyMCE.triggerSave();
	                    var d_data = $('#description').val();
	                    @this.set('description',d_data);
	                });
	            }
	        });
	    });

	</script>

@endpush
