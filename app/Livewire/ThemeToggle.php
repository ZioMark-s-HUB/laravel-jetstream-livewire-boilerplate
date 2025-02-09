<?php

namespace App\Livewire;

use Livewire\Component;

class ThemeToggle extends Component
{
    public $darkMode;

    public function mount()
    {
        $this->darkMode = session()->get('darkMode', false);
    }

    public function toggleTheme()
    {
        $this->darkMode = !$this->darkMode;
        session()->put('darkMode', $this->darkMode);
        $this->dispatch('theme-changed', darkMode: $this->darkMode);
    }

    public function render()
    {
        return view('livewire.theme-toggle', [
            'darkMode' => $this->darkMode
        ]);
    }
}