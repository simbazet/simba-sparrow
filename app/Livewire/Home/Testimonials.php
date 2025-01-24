<?php

namespace App\Livewire\Home;

use App\Models\Home\Statictics;
use App\Models\Home\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        $stats = Statictics::all();

        return view('livewire.home.testimonials', [
            'testimonials' => $testimonials,
            'stats' => $stats
        ]);
    }
}
