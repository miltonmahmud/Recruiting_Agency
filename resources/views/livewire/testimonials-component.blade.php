<div>
    <section class="testimonials-area-three ptb-100">
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
