<?php

namespace App\Http\Livewire\Admin;

use App\Models\JobPost;
use App\Models\User;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
    	$job_post = JobPost::all()->count();
    	$all_jobs = JobPost::orderBy('created_at', 'DESC')->get()->take(5);
    	$users = User::where('utype', 'USR')->count();
    	$employers = User::where('utype', 'EML')->count();
        return view('livewire.admin.admin-dashboard-component', ['job_post'=> $job_post, 'users'=>$users, 'employers'=>$employers, 'all_jobs'=>$all_jobs])->layout('layouts.admin.base');
    }
}
