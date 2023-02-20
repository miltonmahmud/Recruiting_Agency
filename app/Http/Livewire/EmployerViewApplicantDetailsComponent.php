<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployerViewApplicantDetailsComponent extends Component
{
	public $applicant_id;

	public function mount($applicant_id)
    {
        $this->applicant_id = $applicant_id;
    }

    public function render()
    {
        $employer = User::find(Auth::user()->id);
    	$applicant = User::where('id',$this->applicant_id)->first();
        return view('livewire.employer-view-applicant-details-component', ['applicant'=>$applicant, 'employer'=>$employer])->layout('layouts.employer.base');
    }
}
