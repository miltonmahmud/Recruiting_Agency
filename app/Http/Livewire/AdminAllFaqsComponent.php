<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class AdminAllFaqsComponent extends Component
{
	public $Faq_id;

    protected $listeners = ['deleteConfirmed' => 'deleteFaq'];

    public function deleteConfirmation($id) {
        $this->Faq_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

	public function deleteFaq()
    {
        $Faq = Faq::where('id', $this->Faq_id)->first();
        $Faq->delete();
        $this->dispatchBrowserEvent('FaqDelete');
        return redirect()->route('admin.all-faqs');

    }

    public function render()
    {
    	$faq = Faq::all();
        return view('livewire.admin-all-faqs-component', ['faq'=>$faq])->layout('layouts.admin.base');
    }
}
