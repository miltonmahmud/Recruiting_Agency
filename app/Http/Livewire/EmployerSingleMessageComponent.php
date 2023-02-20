<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployerSingleMessageComponent extends Component
{
    public function render()
    {
        return view('livewire.employer-single-message-component')->layout('layouts.employer.base');
    }
}
