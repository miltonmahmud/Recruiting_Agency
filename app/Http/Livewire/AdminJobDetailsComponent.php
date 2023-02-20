<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;

class AdminJobDetailsComponent extends Component
{
	protected $listeners = ['deleteConfirmed' => 'deletePost'];

	public $post_update_id;
	public $title;
	public $industry;
	public $location;
	public $job_type;
	public $deadline;
	public $description;

	public function mount($post_id) {

		$post = JobPost::find($post_id);
		$this->post_update_id = $post->id;
		$this->title = $post->title;
		$this->industry = $post->industry;
		$this->location = $post->location;
		$this->job_type = $post->job_type;
		$this->deadline = $post->deadline;
		$this->description = $post->description;
	}

	public function deleteConfirmation($id) {
        $this->post_update_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deletePost()
    {
        $post = JobPost::where('id', $this->post_update_id)->first();
        $post->delete();
        $this->dispatchBrowserEvent('postDelete');
    }

    public function render()
    {
        return view('livewire.admin-job-details-component')->layout('layouts.admin.base');
    }
}
