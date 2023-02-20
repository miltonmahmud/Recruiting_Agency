<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminSingleEmployerDetailsComponent extends Component
{
	public $user_id;

	public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function setEmployer($id) {
        $user = User::find($id);
        $user->utype = "EML";
        $user->save();
        $this->dispatchBrowserEvent('setasEmployer');
        return redirect()->route('admin.all-employers');
    }

    public function setUser($id) {
        $user = User::find($id);
        $user->utype = "USR";
        $user->save();
        $this->dispatchBrowserEvent('setasUser');
        return redirect()->route('admin.all-users');
    }

    public function render()
    {
    	$user = User::where('id',$this->user_id)->first();
        return view('livewire.admin-single-employer-details-component', ['user'=>$user])->layout('layouts.admin.base');
    }
}
