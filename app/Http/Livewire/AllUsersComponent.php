<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class AllUsersComponent extends Component
{
	use WithPagination;
    public $searchTerm;

	protected $paginationTheme = 'bootstrap';	

    public function render()
    {
    	$search = '%' . $this->searchTerm . '%';
        $users = User::where('utype', 'USR')
        			->where('name', 'LIKE',$search)
                    ->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.all-users-component', ['users'=>$users])->layout('layouts.admin.base');
    }
}
