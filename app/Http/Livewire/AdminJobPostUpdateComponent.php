<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;

class AdminJobPostUpdateComponent extends Component
{
	public $title;
	public $industry;
	public $location;
	public $job_type;
	public $deadline;
	public $description;

    public function mount($post_id)
    {
        $Post = JobPost::find($post_id);
        $this->title = $Post->title;
		$this->industry = $Post->industry;
		$this->location = $Post->location;
		$this->job_type = $Post->job_type;
		$this->deadline = $Post->deadline;
		$this->description = $Post->description;
		$this->Post_id = $Post->id;
    }

    public function updatePost() {
    	$this->validate([
			'title' => 'required',
			'industry' => 'required',
			'location' => 'required',
			'job_type' => 'required',
			'deadline' => 'required',
			'description' => 'required'
		]);

		$post = JobPost::find($this->Post_id);
		$post->title = $this->title;
		$post->industry = $this->industry;
		$post->location = $this->location;
		$post->job_type = $this->job_type;
		$post->deadline = $this->deadline;
		$post->description = $this->description;

		$post->save();
		$this->dispatchBrowserEvent('postUpdate');
		return redirect()->route('admin.posted-jobs');
    }



    public function render()
    {
        return view('livewire.admin-job-post-update-component')->layout('layouts.admin.base');
    }
}
