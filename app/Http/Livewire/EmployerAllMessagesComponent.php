<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployerAllMessagesComponent extends Component
{
    public function render()
    {
        return view('livewire.employer-all-messages-component')->layout('layouts.employer.base');
    }
}
