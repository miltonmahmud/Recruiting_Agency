<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Resume;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserResumeComponent extends Component
{
	public $position;
	public $first_name;
	public $last_name;
	public $email;
	public $phone;
	public $date_of_birth;
	public $gender;
	public $maritial_status;
	public $nationality;
	public $religion;
	public $address	;
	public $objective;
	public $level_of_education;
	public $degree_title;
	public $major;
	public $institute;
	public $result;
	public $year_of_passing;
	public $company;
	public $business;
	public $designation;
	public $department;
	public $responsibilities;
	public $location;
	public $employment_year;
	public $employment_month;

	public function send_resume() {
		$resume = new Resume();
		$resume->position = $this->position;
		$resume->first_name = $this->first_name;
		$resume->last_name = $this->last_name;
		$resume->email = $this->email;
		$resume->phone = $this->phone;
		$resume->date_of_birth = $this->date_of_birth;
		$resume->gender = $this->gender;
		$resume->maritial_status = $this->maritial_status;
		$resume->nationality = $this->nationality;
		$resume->religion = $this->religion;
		$resume->address	 = $this->address;
		$resume->objective = $this->objective;
		$resume->level_of_education = $this->level_of_education;
		$resume->degree_title = $this->degree_title;
		$resume->major = $this->major;
		$resume->institute = $this->institute;
		$resume->result = $this->result;
		$resume->year_of_passing = $this->year_of_passing;
		$resume->company_name = $this->company;
		$resume->company_business = $this->business;
		$resume->designation = $this->designation;
		$resume->department = $this->department;
		$resume->responsibilities = $this->responsibilities;
		$resume->company_location = $this->location;
		$resume->employment_year = $this->employment_year;
		$resume->employment_month = $this->employment_month;
		$resume->user_id = Auth::user()->id;

		$resume->save();
		$this->dispatchBrowserEvent('resume_updated');
	}

    public function render()
    {
    	$user = User::find(Auth::user()->id);
    	$all_job_post = JobPost::all();
        return view('livewire.user-resume-component', ['user'=>$user, 'all_job_post'=>$all_job_post])->layout('layouts.user.base');
    }
}
