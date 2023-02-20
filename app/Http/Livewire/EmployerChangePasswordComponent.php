<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EmployerChangePasswordComponent extends Component
{
	public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'current_password'=>'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);
    }

    public function changePassword()
    {
        $this->validate([
            'current_password'=>'required',
            'password' => 'required|min:8|confirmed|different:current_password',
            'password_confirmation' => 'required|same:password'
        ]);

        if(Hash::check($this->current_password,Auth::user()->password))
        {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            $this->dispatchBrowserEvent('password-changed');
        }
        else
        {
            session()->flash('password_error', 'Password does not match!');
        }
    }

    public function render()
    {
    	$user = User::find(Auth::user()->id);
        return view('livewire.employer-change-password-component', ['user'=>$user])->layout('layouts.employer.base');
    }
}
