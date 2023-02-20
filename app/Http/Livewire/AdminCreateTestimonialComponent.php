<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Livewire\WithFileUploads;
use Livewire\Component;
use Carbon\Carbon;

class AdminCreateTestimonialComponent extends Component
{
	use WithFileUploads;

	public $name;
	public $image;
	public $position;
	public $comment;

	public function addTestimonial()
    {
        $this->validate([
        'name' => 'required',
        'image' => 'image|max:1024',
        'position' => 'required',
        'comment' => 'required',
    ]);

        $testimonial = new Testimonial();
        $testimonial->name = $this->name;

        $imagename = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('testimonials',$imagename);                                              
        $testimonial->image = $imagename;

        $testimonial->position = $this->position;
        $testimonial->comment = $this->comment;
        $testimonial->save();
        $this->dispatchBrowserEvent('addtestimonial');
    } 



    public function render()
    {
        return view('livewire.admin-create-testimonial-component')->layout('layouts.admin.base');
    }
}
