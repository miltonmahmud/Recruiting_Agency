<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class AllClientsComponent extends Component
{
	protected $listeners = ['deleteConfirmed' => 'deleteClient'];

	public $client_id;

	public function deleteConfirmation($id) {
        $this->client_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteClient()
    {
        $client = Client::where('id', $this->client_id)->first();
        $client->delete();
        $this->dispatchBrowserEvent('clientDelete');
        return redirect()->route('admin.all-clients');
    }

    public function render()
    {
    	$clients = Client::all();
        return view('livewire.all-clients-component', ['clients'=>$clients])->layout('layouts.admin.base');
    }
}
