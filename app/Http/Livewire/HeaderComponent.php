<?php

namespace App\Http\Livewire;

use App\Models\Settings;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
    	$settings = Settings::find(1);
        return view('livewire.header-component', ['settings'=> $settings]);
    }
}
