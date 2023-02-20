<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class EditProfileComponent extends Component
{
	use WithFileUploads;

	public $newimage;
	public $newvideo;
	public $image;
	public $name;
	public $position;
	public $email;
	public $phone;
	public $description;
	public $country;
	public $region;
	public $city;
	public $post_code;
	public $address;
	public $video;
	public $user_id;

	public function mount()
    {
        $user = User::find(Auth::user()->id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->position = $user->profile->position;
        $this->image = $user->profile->image;
		$this->phone = $user->profile->phone;
		$this->description = $user->profile->description;
		$this->country = $user->profile->country;
		$this->region = $user->profile->region;
		$this->city = $user->profile->city;
		$this->post_code = $user->profile->post_code;
		$this->address = $user->profile->address;
		$this->video = $user->profile->video;
		$this->user_id = $user->id;
    }

    public function update_profile() {

    	$this->validate([
    		'newvideo'=>'mimes:mp4|max:1228800'
    	]);

		$user = User::find(Auth::user()->id);
		$user->name = $this->name;
        $user->save();

        if($this->newimage)
        {
            if($this->image)
            {
                unlink('assets/images/profile/'.$this->image);
            }

            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $user->profile->image = $imageName;
        }

        if($this->newvideo)
        {
            if($this->video)
            {
                unlink('assets/images/video/'.$this->video);
            }

            $videoName = Carbon::now()->timestamp . '.' . $this->newvideo->extension();
            $this->newvideo->storeAs('video',$videoName);
            $user->profile->video = $videoName;
        }

		$user->profile->position = $this->position;
		$user->profile->email = $this->email;
		$user->profile->phone = $this->phone;
		$user->profile->description = $this->description;
		$user->profile->country = $this->country;
		$user->profile->region = $this->region;
		$user->profile->city = $this->city;
		$user->profile->post_code = $this->post_code;
		$user->profile->address = $this->address;
		$user->profile->user_id = $this->user_id;

		$user->profile->save();
		$this->dispatchBrowserEvent('profile-created');
		return redirect()->route('user.profile');

	}

    public function render()
    {
    	$user = User::find(Auth::user()->id);
        return view('livewire.edit-profile-component', ['user'=>$user])->layout('layouts.user.base');
    }
}

