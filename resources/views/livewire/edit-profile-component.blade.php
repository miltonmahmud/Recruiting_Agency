
<div>

	<style>
		.default-btn {
			background-color: #0b8fad;
		}

		[x-cloak] { display: none !important; }
	</style>

	<div>
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
									@if($user->profile)
										@if($user->profile->position)
									<span>{{$user->profile->position}}</span>
									@else
									<span>Position: Unknown</span>
									@endif

									@else
									<span>Position: Unknown</span>
									@endif

								</div>
							</div>

							<ul>
								<li>
									<a href="{{route('user.dashboard')}}">Dashboard</a>
								</li>
								<li>
									<a href="{{route('user.profile')}}" class="active">Profile</a>
								</li>
								<li>
									<a href="{{route('user.resume')}}">My Resume</a>
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
						<div class="candidates-profile-content">
							<form class="profile-info" action="" wire:submit.prevent="update_profile">
								<h3>Basic Info</h3>

								<div class="row">

									<div class="col-lg-12 col-md-12 mb-2" >
										<div class="avatar-img">
											@if($newimage)
						                        <img src="{{$newimage->temporaryUrl()}}" width="130" />
						                     @elseif($image)
						                        <img src="{{asset('assets/images/profile')}}/{{$image}}" width="130" />
						                     @else
						                        <img src="{{asset('assets/images/profile/dummy-image.png')}}" width="130" />
						                     @endif
										</div>

										<div class="form-group">
											<label>Image</label>
											<input class="form-control" type="file" wire:model="newimage">

										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" type="text" wire:model="name">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Position</label>
											<input class="form-control" type="text" wire:model="position">
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

									<div class="col-lg-12">
										<div class="form-group">
											<label>Job Description</label>
											<textarea wire:model="description" class="form-control" rows="6"></textarea>
										</div>
									</div>
								</div>

								<h3>Address</h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Country</label>
											<input class="form-control" type="text" wire:model="country">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Region</label>
											<input class="form-control" type="text" wire:model="region">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>City</label>
											<input class="form-control" type="text" wire:model="city">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Post Code</label>
											<input class="form-control" type="text" wire:model="post_code">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Full Address</label>
											<input class="form-control" type="text" wire:model="address">
										</div>
									</div>

									 <div class="col-lg-12" style="margin-bottom: 10px;">
									 	@if($newvideo)
				                        <iframe class="embed-responsive-item" src="{{$newvideo->temporaryUrl()}}" /></iframe>
				                     @elseif($video)
				                        <iframe class="embed-responsive-item" src="{{asset('assets/images/video')}}/{{$video}}" /></iframe>
				                     @else
				                        <p>Please Upload 30 Seconds Video of Yourself (.mp4 formate)</p>
				                     @endif
									 </div>


									<div class="col-lg-12" x-data="{ isUploading: false, progress: 0 }"
									    x-on:livewire-upload-start="isUploading = true"
									    x-on:livewire-upload-finish="isUploading = false"
									    x-on:livewire-upload-error="isUploading = false"
									    x-on:livewire-upload-progress="progress = $event.detail.progress">

									    <div class="progress my-3" x-show="isUploading" x-cloak>
										  <div class="progress-bar" role="progressbar" :style="`width: ${progress}%`"></div>	
										</div>

										<div class="form-group" x-show="!isUploading">
											<label>Video</label>
											<input class="form-control" type="file" wire:model="newvideo">
											@error('newvideo')
											<div class="alert alert-danger">
												{{ $message }}
											</div>
											@enderror
										</div>
									</div>

									<div class="col-lg-12">
										<button href="" type="submit" class="default-btn">Save</button>
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

<script src="//unpkg.com/alpinejs" defer></script>

@endpush