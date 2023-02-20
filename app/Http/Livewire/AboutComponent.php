<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\About;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
    	$services = Service::all();
    	$about = About::find(1);
        return view('livewire.about-component', ['services'=>$services, 'about'=>$about])->layout('layouts.base');
    }
}
