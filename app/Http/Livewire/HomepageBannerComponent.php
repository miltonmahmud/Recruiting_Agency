<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use Livewire\WithFileUploads;
use Carbon\Carbon;

use Livewire\Component;

class HomepageBannerComponent extends Component
{
	use WithFileUploads;

	public $image;
	public $title;
	public $subtitle;
	public $newimage;

	public function mount() {
		$banner = Banner::find(1);
		$this->image = $banner->image;
		$this->title = $banner->title;
		$this->subtitle = $banner->subtitle;
	}

	public function updated($fields) {
		$this->validateOnly($fields,[
			'title'=> 'required',
			'subtitle'=> 'required'
		]);

		if($this->newimage)
        {
             $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png'
                ]);
        }
	}

	public function updateBanner() {
		$this->validate([
        'title' => 'required',
        'subtitle' => 'required',
        ]);

        if($this->newimage)
        {
             $this->validate([
                'newimage' => 'required|mimes:jpeg,png'
                ]);
        }

        $banner = Banner::find(1);
		$banner->title = $this->title;
		$banner->subtitle = $this->subtitle;
		if($this->newimage)
        {
            unlink('assets/images/banner'. '/' .$banner->image);
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('banner',$imageName);
            $banner->image = $imageName;
        }

        $banner->save();
        $this->dispatchBrowserEvent('updateBanner');
        return redirect()->route('admin.homepage-banner');
	}

    public function render()
    {
    	$banner = Banner::find(1);
        return view('livewire.homepage-banner-component',['banner'=>$banner])->layout('layouts.admin.base');
    }
}
