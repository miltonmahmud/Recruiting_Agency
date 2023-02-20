<div>
    <section class="who-we-are-page pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="who-we-are-img">
							<img src="{{asset('assets/images/about')}}/{{$about->image}}" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content">
							<span>Who We Are</span>
							<h2>{{$about->headline}}</h2>
							<p>{{$about->description}}</p>

							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="who-we-are-single-item">
										<h3>{{$about->left_subheadline}}</h3>
										<p>{{$about->left_description}}</p>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="who-we-are-single-item">
										<h3>{{$about->right_subheadline}}</h3>
										<p>{{$about->right_description}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Who We Are Area -->

		<!-- Start Working Area -->
		<section class="working-area working-area-two pt-100 pb-70">
			<div class="container">
				<div class="section-title green-title">
					<span>Our Services</span>
					<h2>We offer variety of Service</h2>
				</div>

				<div class="row">
					@foreach($services as $service)
					<div class="col-lg-3 col-sm-6">
						<div class="single-working">
							<i class="{{$service->icon}}"></i>
							<h3>{{$service->title}}</h3>
							<p>{{$service->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
</div>
