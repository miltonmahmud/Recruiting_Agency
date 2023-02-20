<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserAllMessagesComponent extends Component
{
    public function render()
    {
        return view('livewire.user-all-messages-component')->layout('layouts.user.base');
    }
}
