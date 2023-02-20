<?php

namespace App\Http\Livewire;

use App\Models\Settings;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
    	$settings = Settings::find(1);
        return view('livewire.footer-component', ['settings'=> $settings]);
    }
}
