<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\WithPagination;
use Livewire\Component;

class JobOpeningsComponent extends Component
{
	use WithPagination;

	public $searchTerm;

	protected $paginationTheme = 'bootstrap';
	
    public function render()
    {
    	$search = '%' . $this->searchTerm . '%';
        $posted_jobs = JobPost::where('title', 'LIKE',$search)
        			->orwhere('industry', 'LIKE',$search)
                    ->orwhere('location', 'LIKE',$search)->paginate(10);
        return view('livewire.job-openings-component', ['posted_jobs'=>$posted_jobs])->layout('layouts.base');
    }
}
