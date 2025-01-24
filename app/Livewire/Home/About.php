<?php

namespace App\Livewire\Home;

use App\Models\Home\About as HomeAbout;
use App\Models\Home\AboutService;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $about = HomeAbout::latest()->first();
        $aboutServices = AboutService::all();

        return view('livewire.home.about', [
            'about' => $about,
            'aboutServices' => $aboutServices
        ]);
    }
}
