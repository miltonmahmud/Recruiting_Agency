<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use App\Models\Client;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Testimonial;
use Livewire\WithPagination;
use Livewire\Component;

class HomeComponent extends Component
{
	use WithPagination;

    public $searchTerm;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
    	$testimonials = Testimonial::all();
    	$banner = Banner::find(1);
    	$services = Service::all();
    	$clients = Client::all()->count();
    	// $new_jobs = JobPost::all()->count();
        $search = '%' . $this->searchTerm . '%';
        $posted_jobs = JobPost::where('title', 'LIKE',$search)
                    ->orwhere('industry', 'LIKE',$search)
                    ->orwhere('location', 'LIKE',$search)->paginate(10);

        return view('livewire.home-component', ['posted_jobs'=>$posted_jobs, 'testimonials'=>$testimonials, 'services'=>$services, 'banner'=>$banner, 'clients'=>$clients])->layout('layouts.base');
    }
}
