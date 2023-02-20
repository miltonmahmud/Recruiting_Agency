<div>

	<style>
		.main-contact-area #contactForm {
			border-radius: 30px;
			background-color: #d7e5e9;
		}

		.main-contact-area .contact-info .address {
			border-radius: 30px;
			background-color: #d7e5e9;
		}

		.address li i {
			border-radius: 30px;
		}

		.main-contact-area h3 {
    background-color: none !important;
}
	</style>

    <div class="map-area">
			<iframe src="{{$settings->map}}"></iframe>
		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<h3 class="text-center mb-3">Contact Details</h3>
						<div class="contact-info">
							<ul class="address">
								<li>
									<i class="bx bx-phone-call"></i>
									<span>Phone</span>
									<a href="tel:+1-(514)-7939-357">{{$settings->phone}}</a>
								</li>
								<li>
									<i class="bx bx-envelope"></i>
									<span>Email</span>
									<a href="#"><span class="">{{$settings->email}}</span></a>
								</li>
								<li>
									<i class="bx bx-location-plus"></i>
									<span>Address</span>
									{{$settings->address}}
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8">
						<h3 class="text-center mb-3">Contact Form</h3>
						<form id="contactForm" wire:submit.prevent="addContact">
						<div class="row">
							<div class="col-lg-12">
								@if(Session::has('message'))
		                          <div class="alert alert-success" role="alert">{{Session::get('message')}}
		                          </div>
		                        @endif
							</div>
						</div>
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Name</label>
										<input type="text" class="form-control" wire:model="name">
										@error('name') <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>
	
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Email</label>
										<input type="email" class="form-control" wire:model="email">
										@error('email') <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Phone</label>
										<input type="text" class="form-control" wire:model="phone">
										@error('phone') <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>
	
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control" wire:model="subject">
										@error('subject') <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>
	
								<div class="col-12">
									<div class="form-group">
										<label>Your Message</label>
										<textarea name="message" class="form-control" cols="30" rows="10" wire:model="message" style="border-radius: 30px !important;"></textarea>
										@error('message') <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>
	
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn" style="border-radius: 30px;">
										<span>Send Message</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
</div>
