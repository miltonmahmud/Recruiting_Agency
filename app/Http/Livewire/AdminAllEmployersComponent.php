<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class AdminAllEmployersComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin-all-employers-component', ['employers'=>User::where('utype', 'EML')->paginate(10)])->layout('layouts.admin.base');
    }
}
