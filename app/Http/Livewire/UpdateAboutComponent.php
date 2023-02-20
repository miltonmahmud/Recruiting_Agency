<?php

namespace App\Http\Livewire;

use App\Models\About;
use Livewire\Component;

class UpdateAboutComponent extends Component
{
	public $headline;
	public $image;
	public $description;
	public $left_subheadline;
	public $left_description;
	public $right_subheadline;
	public $right_description;
	public $newimage;

	public function mount() {
		$about = About::find(1);
		$about->$headline = $this->headline;
		$about->$image = $this->image;;
		$about->$description = $this->description;
		$about->$left_subheadline = $this->left_subheadline;
		$about->$left_description = $this->	left_description;
		$about->$right_subheadline = $this->right_subheadline;
		$about->$right_description = $this->right_description;
	}

	public function updated($fields) {
		$this->validateOnly($fields, [
			'headline' => 'required',
			'description' => 'required',
			'left_subheadline' => 'required',
			'left_description' => 'required',
			'right_subheadline' => 'required',
			'right_description' => 'required'
		]);

		if($this->newimage)
        {
             $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png'
                ]);
        }
	}

	public function updateAbout() {

		$this->validate([
			'headline' => 'required',
			'description' => 'required',
			'left_subheadline' => 'required',
			'left_description' => 'required',
			'right_subheadline' => 'required',
			'right_description' => 'required'
		]);

		if($this->newimage)
        {
             $this->validate([
                'newimage' => 'required|mimes:jpeg,png'
                ]);
        }

		$about = About::find(1);
		$about->headline = $this->headline;
		$about->description = $this->description;
		$about->left_subheadline = $this->left_subheadline;
		$about->left_description = $this->left_description;
		$about->right_subheadline = $this->right_subheadline;
		$about->right_description = $this->right_description;

		if($this->newimage)
        {
            unlink('assets/images/about'. '/' .$about->image);
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('about',$imageName);
            $about->image = $imageName;
        }

        $about->save();
        $this->dispatchBrowserEvent('about_updated');
        return redirect()->route('admin.about-section');
	}

    public function render()
    {
        return view('livewire.update-about-component')->layouts('layouts.admin.base');
    }
}
