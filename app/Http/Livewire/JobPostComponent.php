<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;

class JobPostComponent extends Component
{
	public $title;
	public $industry;
	public $location;
	public $job_type;
	public $deadline;
	public $description;

	public function mount ()
    {
        $this->job_type = 'fullTime';
    }

	public function add_job_post() {

		$this->validate([
			'title' => 'required',
			'industry' => 'required',
			'location' => 'required',
			'job_type' => 'required',
			'deadline' => 'required',
			'description' => 'required'
		]);

		$job_post = new JobPost();
		$job_post->title = $this->title;
		$job_post->industry = $this->industry;
		$job_post->location = $this->location;
		$job_post->job_type = $this->job_type;
		$job_post->deadline = $this->deadline;
		$job_post->description = $this->description;
		$job_post->save();

		$this->dispatchBrowserEvent('addPost');
		return redirect()->route('admin.posted-jobs');

	}

    public function render()
    {
        return view('livewire.job-post-component')->layout('layouts.admin.base');
    }
}
