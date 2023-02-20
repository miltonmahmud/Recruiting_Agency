<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class AdminSingleMessageComponent extends Component
{
	public $user_id;

	public function mount($user_id) {
		$this->user_id = $user_id;
	}

    public function render()
    {
    	$message = Message::where('user_id', $this->user_id)->get();
        return view('livewire.admin-single-message-component', ['message'=>$message])->layout('layouts.admin.base');
    }
}
