<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserProfileComponent extends Component
{
    public function render()
    {
         $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }

        $user = User::find(Auth::user()->id);
        return view('livewire.user-profile-component', ['user'=>$user])->layout('layouts.user.base');
    }
}
