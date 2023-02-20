<div>

	<style>
		
		.default-btn-g {
			background-color: #fff !important;
			color: #333;
		}

/*		.default-btn-g:hover {
			background-color: #fff !important;
			color: #333;
		}*/

		.search-job {
		    background-color: #0b8fad;
		    padding: 30px;
		    padding-bottom: 0;
		    margin-bottom: 50px;
		}

		.form-control {
			background-color: #fff !important;
			box-shadow: none !important;
		}

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

.hot-jobs-list:hover .hot-jobs-content h3 a {
    color: #0b8fad;
}

.job-details-area .job-details-content {
	border-radius: 30px !important; 
}

	</style>

    <section class="job-listing-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form class="search-job">
							<div class="row">
								<div class="col-lg-9">
									<div class="form-group">
										<input type="text" class="form-control" id="job-title" placeholder="Job title, location, or company" wire:model="searchTerm">
									</div>
								</div>

								<div class="col-lg-3">
									<button type="submit" class="default-btn default-btn-g">
										<i class="bx bx-search"></i>
										Search Jobs
									</button>
								</div>
							</div>
						</form>

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
								{{$posted_jobs->links()}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
