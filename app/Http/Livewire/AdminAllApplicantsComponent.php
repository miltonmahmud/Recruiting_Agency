<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Exports\ResumeExport;
use Livewire\WithPagination;
use App\Models\Resume;
use Excel;
use Livewire\Component;

class AdminAllApplicantsComponent extends Component
{
	use WithPagination;
    public $searchTerm;

	protected $paginationTheme = 'bootstrap';	

	public function exportIntoExcel() {
        return Excel::download(new ResumeExport, 'Resume_List.xlsx');
    }

    public function render()
    {
    	$applicants = Resume::all();

        return view('livewire.admin-all-applicants-component', ['applicants'=>$applicants])->layout('layouts.admin.base');
    }
}
