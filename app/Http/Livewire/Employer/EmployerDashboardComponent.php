<?php

namespace App\Http\Livewire\Employer;

use App\Models\User;
use App\Models\Profile;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployerDashboardComponent extends Component
{
	use WithPagination;

    public $searchTerm;
    public $applicant_id;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
    	$search = '%' . $this->searchTerm . '%';
        $users = Profile::where('position', 'LIKE',$search)
        			->orWhere('country', 'LIKE',$search)
        			->orWhere('region', 'LIKE',$search)
                    ->orderBy('id', 'ASC')->paginate(10);

    	$user = User::find(Auth::user()->id);
        return view('livewire.employer.employer-dashboard-component', ['user'=> $user,'users'=>$users])->layout('layouts.employer.base');
    }
}
