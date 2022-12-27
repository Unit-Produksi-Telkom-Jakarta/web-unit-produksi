<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class FormPage extends Component
{

    public $forms;

    protected $rules=[
        'forms.client_name'                 =>'required|min:6',
        'forms.client_email'                => 'required|email',
        'forms.no_handphone'                => 'required|min:11|max:12',
        'forms.alamat'                      => 'required|min:10',
        'forms.mulai'                       => 'required',
        'forms.selesai'                     => 'required',
        'forms.pic'                         => 'required',
        'forms.keterangan'                  => 'required',
        'forms.status'                      => 'required',
        'forms.request'                     => 'required',
        'forms.jumlah'                      => 'required',
    ];

    public function mount(){
        $this->forms = new Form();
    }

    public function render(){
        return view('livewire.form-page');
    }

    public function save(){
        $this->validate();
        $this->forms->save();

        session()->flash("message", "Data berhasil masuk!");

        $this->reset('forms');
    }
}
