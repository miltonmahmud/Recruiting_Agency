<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminAllServicesComponent extends Component
{
	use WithPagination;

	protected $listeners = ['deleteConfirmed' => 'deleteservice'];

    public function deleteConfirmation($id) {
        $this->service_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

	public function deleteservice()
    {
        $service = service::where('id', $this->service_id)->first();
        $service->delete();
        $this->dispatchBrowserEvent('serviceDelete');
        return redirect()->route('admin.all-services');

    }

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin-all-services-component', ['services'=> Service::paginate(10)])->layout('layouts.admin.base');
    }
}
