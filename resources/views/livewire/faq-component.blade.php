
<div>
    <section class="faq-area faq-area-about-page ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="faq-accordion">
							<div class="faq-title">
								<h2>Frequently Asked Questions?</h2>
							</div>

							<ul class="accordion">
								@foreach($faqs as $key=>$faq)
								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)">
										<i class="bx bx-plus"></i>
										{{$faq->subject}}
									</a>
	
									<div class="accordion-content">
										<p>{{$faq->description}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="faq-img">
							<img src="{{asset('assets/images/faq-img.png')}}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
