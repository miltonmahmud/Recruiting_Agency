<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminApplicantDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-applicant-details-component')->layout('layouts.admin.base');
    }
}
