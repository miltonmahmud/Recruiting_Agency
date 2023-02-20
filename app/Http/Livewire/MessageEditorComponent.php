<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;

class MessageEditorComponent extends Component
{
	public $subject;
	public $description;
	public $user_id;

	public function mount($user_id) {
		$this->user_id = $user_id;
	}

	public function send_message() {
		$this->validate([
			'user_id' => 'required',
			'subject' => 'required',
			'description' => 'required'
		]);

		$message = new Message();
		$message->user_id = $this->user_id;
		$message->subject = $this->subject;
		$message->description = $this->description;

		$message->save();
		$this->dispatchBrowserEvent('message-sent');

	}



    public function render()
    {
    	$user = User::where('id', $this->user_id);
        return view('livewire.message-editor-component', ['user'=>$user])->layout('layouts.admin.base');
    }
}
