<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class UpdateFaqComponent extends Component
{
	public $subject;
	public $description;

	public function mount($faq_id) {
		$faq = Faq::find($faq_id);
		$this->subject = $faq->subject;
		$this->description = $faq->description;
		$this->faq_id = $faq->id;
	}

	public function update_faq() {
		$this->validate([
			'subject'=> 'required',
			'description'=> 'required'
		]);

		$faq = faq::find($this->faq_id);
		$faq->subject = $this->subject;
		$faq->description = $this->description;
		$faq->save();
		$this->dispatchBrowserEvent('faq-updated');
		return redirect()->route('admin.all-faqs');
	}

    public function render()
    {
        return view('livewire.update-faq-component')->layout('layouts.admin.base');
    }
}
