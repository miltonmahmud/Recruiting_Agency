<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SingleApplicantsComponent extends Component
{
	public $applicant_id;

	public function mount($applicant_id)
    {
        $this->applicant_id = $applicant_id;
    }

    public function render()
    {
    	$user = User::where('id',$this->applicant_id)->first();
        return view('livewire.single-applicants-component', ['user'=>$user])->layout('layouts.admin.base');
    }
}
