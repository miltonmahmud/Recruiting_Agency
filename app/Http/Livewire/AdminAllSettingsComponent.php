<?php

namespace App\Http\Livewire;

use App\Models\Settings;
use Livewire\Component;
use Session;

class AdminAllSettingsComponent extends Component
{
    public $phone;
	public $email;
    public $address;
    public $map;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $twitter;

    public function mount()
    {
        $setting = Settings::find(1);
        if($setting)
        {
            $this->phone = $setting->phone; 
            $this->email = $setting->email;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->facebook = $setting->facebook;
            $this->instagram = $setting->instagram;
            $this->linkedin = $setting->linkedin;
            $this->twitter = $setting->twitter;
        }
    }

    public function saveSettings()
    {
        $this->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'map' => 'required'
        ]);

        $setting = Settings::find(1);

        $setting->phone = $this->phone;
        $setting->email = $this->email;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->linkedin = $this->linkedin;
        $setting->twitter = $this->twitter;
        $setting->save();
        
        $this->dispatchBrowserEvent('settingsSaved');
        return redirect()->route('admin.all-settings');
    }

    public function render()
    {
        return view('livewire.admin-all-settings-component')->layout('layouts.admin.base');
    }
}
