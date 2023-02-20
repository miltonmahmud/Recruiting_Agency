<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AllPostedJobsComponent extends Component
{
    public function render()
    {
    	$all_Job_Posts= JobPost::where('user_id', Auth::user()->id )->get();
        return view('livewire.all-posted-jobs-component', ['all_Job_Posts'=> $all_Job_Posts])->layout('layouts.employer.base');
    }
}
