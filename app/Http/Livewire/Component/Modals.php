<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Modals extends Component
{
    public $open_value = false ;

    protected $listeners = ['openModal' => 'openModal'];

    public function render()
    {
        return view('livewire.component.modals');
    }

    public function openModal()
    {
        $this->$open_value = true;
    }

}
