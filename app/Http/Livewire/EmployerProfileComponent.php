<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployerProfileComponent extends Component
{

    public function render()
    {
    	$employerProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$employerProfile)
        {
            $employerProfile = new Profile();
            $employerProfile->user_id = Auth::user()->id;
            $employerProfile->save();
        }

        $employer = User::find(Auth::user()->id);

        return view('livewire.employer-profile-component', ['employer'=>$employer])->layout('layouts.employer.base');
    }
}
