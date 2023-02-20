<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserAppliedJobsComponent extends Component
{
    public function render()
    {
    	$user = User::find(Auth::user()->id);
        return view('livewire.user-applied-jobs-component', ['user'=>$user])->layout('layouts.user.base');
    }
}
