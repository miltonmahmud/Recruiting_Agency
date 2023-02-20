<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class AddServiceComponent extends Component
{
	public $icon;
	public $title;
	public $description;

	public function add_service() {
		$this->validate([
			'icon'=> 'required',
			'title'=> 'required',
			'description'=> 'required'
		]);

		$service = new Service();
		$service->icon = $this->icon;
		$service->title = $this->title;
		$service->description = $this->description;
		$service->save();
		$this->dispatchBrowserEvent('service_created');
		return redirect()->route('admin.all-services');
	}

    public function render()
    {
        return view('livewire.add-service-component')->layout('layouts.admin.base');
    }
}
