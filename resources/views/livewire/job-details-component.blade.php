<div>

	<style>
		.lc {
    background-color: #d7e5e9;
    text-align: center;
    color: #0b8fad;
    padding: 7px 25px;
    border-radius: 30px;
    width: 150px;
    display: block;
    box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
}

.job-details-area .job-details-content {
	border-radius: 30px !important; 
}
	</style>

    <section class="job-details-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hot-jobs-list">
							<div class="row align-items-center">
								<div class="col-lg-5">
									<div class="hot-jobs-content">
										<h3>{{$post->title}}</h3>
										<span class="sub-title">{{$post->industry}}</span>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="hot-jobs-content">
										<span class="sub-title lc"><b>{{$post->location}}</b></span>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										@if(Auth::user())
										   @if(Auth::user()->utype === 'USR')
											<a href="{{route('user.resume')}}" class="default-btn">Apply Now</a>
											@else
											<a href="#" class="default-btn">Not Applicable</a>
											@endif
										@else
											<a href="{{route('login')}}" class="default-btn">Apply Now</a>
										@endif
										<p><span>Deadline: </span>{{$post->deadline}}</p>
									</div>
								</div>
							</div>
						</div>

						<div class="job-details-content">
							{!! $post->description !!}
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
