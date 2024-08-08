<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class GalerieAdminPage extends Component
{

    public function render()
    {
        return view('livewire.admin.galeries.index')->layout('adminhub::layouts.base');
    }
}
