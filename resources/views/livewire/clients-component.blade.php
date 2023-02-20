<div>

	<style>
		
		.single-live-job {
			padding: 85px 37px;
		}

	</style>

    <section class="live-jobs-area bg-color ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<span>Jobs Live Today</span>
							<h2>Our Valuable Clients</h2>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($clients as $client)
					<div class="col-lg-3 col-sm-6">
						<div class="single-live-job">
							<img src="{{asset('assets/images/client')}}/{{$client->image}}" alt="Image">
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
</div>
