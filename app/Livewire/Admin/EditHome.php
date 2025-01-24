<?php

namespace App\Livewire\Admin;

use App\Models\Home\Home;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditHome extends Component
{
    #[Rule('required|string')]
    public $tag;
    #[Rule('required|string')]
    public $title;
    #[Rule('required|string')]
    public $title_focused;
    #[Rule('required|string')]
    public $description;
    #[Rule('nullable|file')]
    public $image;
    #[Rule('required|numeric')]
    public $awards;
    #[Rule('required|numeric')]
    public $money;
    #[Rule('required|numeric')]
    public $clients;
    #[Rule('required|numeric')]
    public $prices;
    
    public function render()
    {
        $home = Home::latest()->first();

        if ($home) {
            
            $this->tag = $home->tag;
            $this->title = $home->title;
            $this->title_focused = $home->title_focused;
            $this->description = $home->description;
            // $this->image = $home->image;
            $this->awards = $home->awards;
            $this->money = $home->money;
            $this->clients = $home->clients;
            $this->prices = $home->prices;
        }

        return view('livewire.admin.edit-home', [
            'home' => $home
        ]);
    }

    public function close()
    {
        
        
    }

    public function save()
    {
        $validated = $this->validate();
        // save
        $home = Home::latest()->first();
        
        if (!$home) {
            $home = new Home();
        }
        
        // Persist
        $home->tag = $validated['tag'];
        $home->title = $validated['title'];
        $home->title_focused = $validated['title_focused'];
        $home->description = $validated['description'];
        // $home->image = $this->image;
        $home->awards = $validated['awards'];
        $home->money = $validated['money'];
        $home->clients = $validated['clients'];
        $home->prices = $validated['prices'];

        try {
            if ($home->save()) {
                $this->dispatch('transaction-alert', [
                    'icon' => 'success',
                    'title' => 'New Transaction Type Saved',
                    'message' => 'A new transaction type has been created successfully.'
                ]);
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
