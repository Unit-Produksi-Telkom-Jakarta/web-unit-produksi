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
    public $request;

    protected $rules=[
        'name' =>'required|min:6',
        'email' => 'required|email',
        'no_handphone' => 'required|min:11|max:12',
        'alamat' => 'required|min:10',
        'pic' => 'required',
        'request' => 'required'
    ];

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }

    public function inputData(){
        $validatedData = $this->validate();

        Form::create([
            'client_id' => Auth::id(),
            'client_name' => $this->name,
            'client_email' => $this->email,
            'no_handphone' => $this->no_handphone,
            'alamat' => $this->alamat,
            'pic' => $this->pic,
            'request' => $this->request
        ]);
        session()->flash('message', 'Your request is being processed!');

        $this->name = "";
        $this->email = "";
        $this->no_handphone = "";
        $this->alamat = "";
        $this->pic = "";
        $this->request = "";
    }

    public function render(){
        return view('livewire.form-page');
    }
}
