<div>

	<style>
		
		.form-control, .form-control:active, .form-control:focus {
			background-color: #fff;
			box-shadow: none;
		}

		.banner-area.banner-area-two {
		    background-image: url({{asset('assets/images/banner')}}/{{$banner->image}});
		    background-position: center center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		#job_open:hover {
			background-color: #333;
		}

		.main-btn {
			background-color: #cd0d5d !important; border-radius: 30px; padding: 20px 40px !important;
		}

		.main-btn:hover {
			background-color: #333 !important;
		}

	</style>

	<style>
		.default-btn {
			background-color: #0b8fad;
			min-width: 158px;
		}

		.hot-jobs-list:hover .hot-jobs-content h3 a {
    color: #0b8fad;
}

.search-job {
    background-color: #0b8fad;
    padding: 30px;
    padding-bottom: 0;
    margin-bottom: 50px;
}
	</style>

    <section class="banner-area banner-area-two ptb-100">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="banner-content">
							<h1>{{$banner->title}}</h1>
							<p style="margin-top: 50px;">{{$banner->subtitle}}</p>
							<a href="#job_open"class="default-btn main-btn" style="" >Find Job Now</a>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

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
		<!-- End Working Area -->



		<section class="job-listing-area pb-70" >
			<div class="container">
				<div class="section-title green-title" id="job_open">
					<span>Jobs Available</span>
					<h2>Find your Dream Job here</h2>
				</div>

				<div class="row" >
					<div class="col-lg-12">
						<form class="search-job">
								<div class="row">
									<div class="col-lg-9">
										<div class="form-group">
											<input type="text" class="form-control" id="job-title" placeholder="Job title, location, or company" wire:model="searchTerm">
										</div>
									</div>

									<div class="col-lg-3">
										<button type="submit" class="default-btn">
											Search Jobs
										</button>
									</div>
								</div>
							</form>
					</div>
				</div>

				<div class="row" >
					<div class="col-lg-12">

						@foreach($posted_jobs as $posted_job)
						<div class="hot-jobs-list">
							<div class="row align-items-center">
								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3><a href="">{{$posted_job->title}}</a></h3>
										<span class="sub-title">{{$posted_job->industry}}</span>
									</div>
								</div>
								<div class="col-lg-3 hot-jobs-content">
									<span class="lc">{{$posted_job->location}}</span>
								</div>
								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="{{route('job-details',['job_id'=>$posted_job->id])}}" class="default-btn">Browse Job</a>
										<p><span>Deadline: </span>{{$posted_job->deadline}}</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="pagination-area">
									{{$posted_jobs->links()}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="testimonials-area-three ptb-100" wire:ignore>
			<div class="container p-0">
				<div class="section-title">
					<span>What People Say</span>
					<h2>Trusted By Clients</h2>
				</div>

				<div class="testimonials-slider-three owl-carousel owl-theme">
					@foreach($testimonials as $testimonial)
					<div class="single-testimonials">
						<p>“{{$testimonial->comment}}”</p>
						
						<div class="testimonials-content">
							<img src="{{asset('assets/images/testimonials')}}/{{$testimonial->image}}" alt="Image">
							<h3>{{$testimonial->name}}</h3>
							<span>{{$testimonial->position}}</span>
						</div>

						<i class="flaticon-quote"></i>
					</div>
					@endforeach
				</div>
			</div>
		</section>
</div>
