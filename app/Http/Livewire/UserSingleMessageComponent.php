<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserSingleMessageComponent extends Component
{
    public function render()
    {
        return view('livewire.user-single-message-component')->layout('layouts.user.base');
    }
}
