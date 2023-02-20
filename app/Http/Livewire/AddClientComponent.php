<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AddClientComponent extends Component
{
	use WithFileUploads;

	public $image; 
	public $company_name;

	public function addClient() {
		$this->validate([
			'image'=> 'required',
			'company_name'=> 'required'
		]);

		$client = new Client();
		$client->name = $this->company_name;
		
		$imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('client',$imageName);
        $client->image = $imageName;

        $client->save();
        $this->dispatchBrowserEvent('client_added');
        return redirect()->route('admin.all-clients');

	} 

    public function render()
    {
        return view('livewire.add-client-component')->layout('layouts.admin.base');
    }
}
