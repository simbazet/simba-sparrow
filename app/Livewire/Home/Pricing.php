<?php

namespace App\Livewire\Home;

use App\Models\Home\Pricing as HomePricing;
use Livewire\Component;

class Pricing extends Component
{
    public function render()
    {
        $prices = HomePricing::all();
        
        return view('livewire.home.pricing', [
            'prices' => $prices
        ]);
    }
}
