<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ConfirmDeleteData extends ModalComponent
{
    public function render()
    {
        return view('livewire.confirm-delete-data');
    }

    public function mount($form_id){
        $this->form_id = $form_id;
    }

    public function delete(){
        $forms = Form::where('id', $this->form_id)->first();
        $forms->delete();
        $this->closeModal();

        $this->emit('status-change');
        session()->flash("message", "Data dengan id $this->id berhasil di hapus.");
        return redirect()->to('/problem-list');


    }
}
