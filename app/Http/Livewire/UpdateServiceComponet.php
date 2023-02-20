<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class UpdateServiceComponet extends Component
{
	public $icon;
    public $title;
    public $description;

    public function mount($service_id) {
    	$service = Service::find($service_id);
    	$this->icon = $service->icon;
        $this->title = $service->title;
    	$this->description = $service->description;
    	$this->service_id = $service->id;
    }

    public function updated($fields)
     {
        $this->validateOnly($fields, [
        "icon" => "required",
        "title" => "required",
        "description" => "required"
        ]);
     }

    public function updateService() {
    	$this->validate([
    		'icon' => 'required',
            'title' => 'required',
    		'description' => 'required'
    	]);

    	$service = Service::find($this->service_id);
    	$service->icon = $this->icon;
        $service->title = $this->title;
    	$service->description = $this->description;
    	$service->save();
    	$this->dispatchBrowserEvent('service-updated');
    	return redirect()->route('admin.all-services');
    }

    public function render()
    {
        return view('livewire.update-service-componet')->layout('layouts.admin.base');
    }
}
