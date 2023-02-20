<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllApplicantsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-applicants-component')->layout('layouts.employer.base');
    }
}
