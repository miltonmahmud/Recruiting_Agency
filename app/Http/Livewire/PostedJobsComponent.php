<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\WithPagination;
use Livewire\Component;

class PostedJobsComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.posted-jobs-component', ['posted_jobs'=> JobPost::paginate(10)])->layout('layouts.admin.base');
    }
}
