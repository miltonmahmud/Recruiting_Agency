<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserJobDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.user-job-details-component')->layout('layouts.user.base');
    }
}
