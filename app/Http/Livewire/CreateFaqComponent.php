<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class CreateFaqComponent extends Component
{
	public $subject;
	public $description;

	public function create_faq() {
		$this->validate([
			'subject'=> 'required',
			'description'=> 'required'
		]);

		$faq = new Faq();
		$faq->subject = $this->subject;
		$faq->description = $this->description;
		$faq->save();
		$this->dispatchBrowserEvent('faq_created');
		return redirect()->route('admin.all-faqs');
	}

    public function render()
    {
        return view('livewire.create-faq-component')->layout('layouts.admin.base');
    }
}
