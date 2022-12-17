<?php

namespace App\Http\Livewire;

use Illuminate\support\Facades\Auth;
use App\Models\Form;
use Livewire\Component;

class FormPage extends Component
{

    public $name;
    public $email;
    public $no_handphone;
    public $alamat;
    public $pic;
    public $kendala;

    public function inputData(){
        Form::create([
            'client_id' => Auth::id(),
            'client_name' => $this->name,
            'client_email' => $this->email,
            'no_handphone' => $this->no_handphone,
            'alamat' => $this->alamat,
            'pic' => $this->pic,
            'kendala' => $this->kendala
        ]);
        session()->flash('message', 'Your request is being processed!');

        $this->name = "";
        $this->email = "";
        $this->no_handphone = "";
        $this->alamat = "";
        $this->pic = "";
        $this->kendala = "";
    }

    public function render(){
        return view('livewire.form-page');
    }
}
