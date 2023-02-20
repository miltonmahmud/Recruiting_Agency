<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\WithPagination;
use Livewire\Component;

class AdminAllMessagesComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin-all-messages-component', ['messages'=>Contact::orderBy('created_at', 'DESC')->paginate(5)])->layout('layouts.admin.base');
    }
}
