<?php

namespace App\Livewire\Home;

use App\Models\Home\FAQ as HomeFAQ;
use Livewire\Component;

class FAQ extends Component
{
    public function render()
    {
        $faqs = HomeFAQ::all();
        return view('livewire.home.f-a-q', [
            'faqs' => $faqs
        ]);
    }
}
