<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class AdminTestimonialComponent extends Component
{
	public $testimonial_id;

    protected $listeners = ['deleteConfirmed' => 'deletetestimonial'];

    public function deleteConfirmation($id) {
        $this->testimonial_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

	public function deletetestimonial()
    {
        $testimonial = testimonial::where('id', $this->testimonial_id)->first();
        $testimonial->delete();
        $this->dispatchBrowserEvent('testimonialDelete');
        return redirect()->route('admin.all-testimonials');

    }

    public function render()
    {
    	$testimonials = Testimonial::all();
        return view('livewire.admin-testimonial-component', ['testimonials'=>$testimonials])->layout('layouts.admin.base');
    }
}
