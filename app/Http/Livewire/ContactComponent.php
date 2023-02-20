<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Settings;
use Session;
use Livewire\Component;

class ContactComponent extends Component
{
	public $name;
	public $email;
	public $phone;
	public $subject;
	public $message;

	public function addContact() {
		$this->validate([
			'name'=> 'required',
			'email'=> 'required',
			'phone'=> 'required',
			'subject'=> 'required',
			'message'=> 'required'
		]);

		$contact = new Contact();
		$contact->name = $this->name;
		$contact->email = $this->email;
		$contact->phone = $this->phone;
		$contact->subject = $this->subject;
		$contact->message = $this->message;

		$contact->save();
		Session::flash('message', 'Message Sent Sucessfully!'); 
	}

    public function render()
    {
    	$settings = Settings::find(1);
        return view('livewire.contact-component', ['settings'=> $settings])->layout('layouts.base');
    }
}
