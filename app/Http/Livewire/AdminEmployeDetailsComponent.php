<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminEmployeDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-employe-details-component')->layout('layouts.admin.base');
    }
}
