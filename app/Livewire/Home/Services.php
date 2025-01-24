<?php

namespace App\Livewire\Home;

use App\Models\Home\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $services = Service::all();

        return view('livewire.home.services', [
            'services' => $services
        ]);
    }
}
