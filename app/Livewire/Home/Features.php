<?php

namespace App\Livewire\Home;

use App\Models\Home\Client;
use App\Models\Home\Feature;
use App\Models\Home\FeatureAction;
use App\Models\Home\FeatureOptions;
use Livewire\Component;

class Features extends Component
{
    public function render()
    {
        $features = Feature::all();
        $options = FeatureOptions::all();
        $action = FeatureAction::latest()->first();
        $clients = Client::all();

        return view('livewire.home.features', [
            'features' => $features,
            'options' => $options,
            'action' => $action,
            'clients' => $clients
        ]);
    }
}
