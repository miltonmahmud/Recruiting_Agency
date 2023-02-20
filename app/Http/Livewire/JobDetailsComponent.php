<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;

class JobDetailsComponent extends Component
{
	public $post_id;

	public function mount($job_id)
    {
        $this->post_id = $job_id;
    }

    public function render()
    {
    	$post = JobPost::where('id', $this->post_id)->first();
        return view('livewire.job-details-component', ['post'=>$post])->layout('layouts.base');
    }
}
