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
    public $estimasi_mulai;
    public $estimasi_selesai;
    public $pic;
    public $request;
    public $keterangan;
    public $status;
    public $jumlah;

    protected $rules=[
        'name' =>'required|min:6',
        'email' => 'required|email',
        'no_handphone' => 'required|min:11|max:12',
        'alamat' => 'required|min:10',
        'estimasi_mulai' => 'required',
        'estimasi_selesai' => 'required',
        'pic' => 'required',
        'keterangan' => 'required',
        'status' => 'required',
        'request' => 'required'
    ];

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }

    public function inputData(){
        $validatedData = $this->validate();

        Form::create([
            'client_name' => $this->name,
            'client_email' => $this->email,
            'no_handphone' => $this->no_handphone,
            'alamat' => $this->alamat,
            'mulai' => $this->estimasi_mulai,
            'selesai' => $this->estimasi_selesai,
            'pic' => $this->pic,
            'request' => $this->request,
            'keterangan' => $this->keterangan,
            'status' => $this->status,
            'jumlah' => $this->jumlah,
        ]);
        session()->flash('message', 'Your request is being processed!');

        $this->name = "";
        $this->email = "";
        $this->no_handphone = "";
        $this->alamat = "";
        $this->estimasi_mulai = "";
        $this->estimasi_selesai = "";
        $this->pic = "";
        $this->request = "";
        $this->keterangan = "";
        $this->status = "";
        $this->jumlah = "";
    }

    public function render(){
        return view('livewire.form-page');
    }
}
