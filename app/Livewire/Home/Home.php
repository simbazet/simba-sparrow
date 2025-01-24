<?php

namespace App\Livewire\Home;

use App\Models\Home\Home as HomeHome;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $home = HomeHome::latest()->first();

        return view('livewire.home.home', [
            'home' => $home
        ]);
    }
}
