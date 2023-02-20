<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientsComponent extends Component
{
    public function render()
    {
    	$clients = Client::all();
        return view('livewire.clients-component', ['clients'=>$clients])->layout('layouts.base');
    }
}
