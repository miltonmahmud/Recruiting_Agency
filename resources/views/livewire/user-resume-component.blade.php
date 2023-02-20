

<div>

	<style>
		.default-btn {
			background-color: #0b8fad;
			min-width: 158px;
		}
	</style>

	<section class="candidates-dashboard-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="avatar-sidebar">
							<div class="avatar-img">
								@if($user->profile)
									@if($user->profile->image)
								<img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" alt="image" width="130">
								@else
									<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
									@endif
								@else
								<img src="{{asset('assets/images/profile/dummy-image.png')}}" alt="image" width="130">
								@endif

								<div class="avatar-mane">
									<h4>{{$user->name}}</h4>
									<span>
										@if($user->profile)
										{{$user->profile->position}}
										@else
										Position: Unknown
										@endif
									</span>
								</div>
							</div>

							<ul>
								<li>
									<a href="{{route('user.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('user.profile')}}">Profile</a>
								</li>
								<li>
									<a href="{{route('user.resume')}}" class="active">My Resume</a>
								</li>
								<li>
									<a href="{{route('user.applied-jobs')}}">All Applied Jobs</a>
								</li>
								<li>
									<a href="{{route('user.change-password')}}">Change Password</a>
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
						<div class="candidates-resume-content">
							<form class="resume-info" enctype="multipart/form-data" wire:submit.prevent="send_resume" >
								<h3>Personal Details</h3>

								<div class="row">

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Position Applying</label>
											<select class="position form-control" wire:model="position">
												<option value="0" class="text-muted">Select Position</option>
												@foreach($all_job_post as $job_post)
												<option value="{{$job_post->title}}">{{$job_post->title}}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>First Name</label>
											<input class="form-control" type="text" wire:model="first_name">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Last Name</label>
											<input class="form-control" type="text" wire:model="last_name">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" wire:model="email">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Phone</label>
											<input class="form-control" type="text" wire:model="phone">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Date Of Barth</label>
											<div class="input-group date" id="datetimepicker">
												<input type="text" id="birth_date" class="form-control" placeholder="12/11/2020" wire:model="date_of_birth">
												<span class="input-group-addon"></span>
												<i class="bx bx-calendar"></i>
											</div>	
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Gender</label>
											<select class="height form-control" wire:model="gender">
												<option value="0" class="text-muted">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Marital status</label>
											<select class="height form-control" wire:model="maritial_status">
												<option value="0" class="text-muted">Select Status</option>
												<option value="married">Married</option>
												<option value="unmarried">Unmarried</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Nationality</label>
											<input type="text" class="form-control" wire:model="nationality">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Religion</label>
											<input class="form-control" type="text" wire:model="religion">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Address Details</label>
											<textarea name="message" class="form-control" rows="4" wire:model="address"></textarea>
										</div>
									</div>
								</div>

								<h3>Career And Application Information</h3>

								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Objective</label>
											<textarea name="message" class="form-control" rows="4" wire:model="objective"></textarea>
										</div>
									</div>
								</div>

								<h3>Education</h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Level of Education</label>
											<input type="text" name="level" class="form-control" wire:model="level_of_education">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Exam / Degree Title</label>
											<input type="text" name="degre" class="form-control" wire:model="degree_title">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Major/Group</label>
											<input class="form-control" type="text" name="Major" wire:model="major">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Institute Name</label>
											<input class="form-control" type="text" wire:model="institute">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Result</label>
											<select class="height form-control" wire:model="result">
												<option value="0" class="text-muted">First Class</option>
												<option value="second_class">Second Class</option>
												<option value="third_class">Third Class</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Year of Passing</label>
											<select class="form-control" wire:model="year_of_passing">
												<option value="0" class="text-muted">Year of Passing</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
											</select>
										</div>
									</div>
								</div>

								<h3>Experience</h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Company Name</label>
											<input class="form-control" type="text" wire:model="company">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Company Business </label>
											<input class="form-control" type="text" wire:model="business">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Designation</label>
											<input class="form-control" type="text" wire:model="designation">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Department</label>
											<input class="form-control" type="text" wire:model="department">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Responsibilities</label>
											<input class="form-control" type="text" wire:model="responsibilities">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Company Location</label>
											<input class="form-control" type="text" wire:model="location">
										</div>
									</div>

									<div class="col-lg-12">
										<h6>Employment Period</h6><hr>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label for="">Year</label>
											<input class="form-control" type="text" wire:model="employment_year">
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label for="">Month</label>
											<input class="form-control" type="text" wire:model="employment_month">
										</div>
									</div>

									<div class="col-lg-12">
										<button type="submit" class="default-btn">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>

@push('scripts')

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.tiny.cloud/1/4kwhiuae9ur1blfbr6mga6srqo0b4t2v0ag6no06ajzjvira/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
      flatpickr("#birth_date", {
        enableTime: false,
    dateFormat: "Y-m-d",
      });
  </script>


@endpush