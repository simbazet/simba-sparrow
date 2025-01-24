<?php

namespace App\Livewire\Admin;

use App\Models\Home\Home;
use Livewire\Attributes\Layout;
use Livewire\Component;

// #[Layout('admin.app-admin')]
class Dashboard extends Component
{
    protected $layout = 'admin.app-admin';

    public function render()
    {
        $home = Home::latest()->first();

        return view('livewire.admin.dashboard', [
            'home' => $home
        ])->layout('admin/app-admin');
    }
}
