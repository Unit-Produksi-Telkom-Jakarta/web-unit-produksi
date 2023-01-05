<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteList extends Component
{
    public function render()
    {
        return view('livewire.delete-list');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'data berhasil di delete');
    }
}

