<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class UpdateForm extends Component
{
    public $formId;
    public $client_name;
    public $client_email;
    public $no_handphone;
    public $alamat;
    public $mulai;
    public $selesai;
    public $pic;
    public $keterangan;
    public $status;
    public $request;
    public $jumlah;

    public function mount($form){

        $this->formId = $form->id;
        $this->client_name = $form->client_name;
        $this->client_email = $form->client_email;
        $this->no_handphone = $form->no_handphone;
        $this->alamat = $form->alamat;
        $this->mulai = $form->mulai;
        $this->selesai = $form->selesai;
        $this->pic = $form->pic;
        $this->keterangan = $form->keterangan;
        $this->status= $form->status;
        $this->request= $form->request;
        $this->jumlah= $form->jumlah;

    }

    public function update(){

        $this->validate([
            'client_name'                 => 'required|min:6',
            'client_email'                => 'required|email',
            'no_handphone'                => 'required|min:11|max:13',
            'alamat'                      => 'required|min:10',
            'mulai'                       => 'required',
            'selesai'                     => 'required',
            'pic'                         => 'required',
            'keterangan'                  => 'required',
            'status'                      => 'required',
            'request'                     => 'required',
            'jumlah'                      => 'required',
        ]);

        if($this->formId){

            $form = Form::find($this->formId);

             if($form) {
                $form->update([
                    'client_name'                 => $this->client_name,
                    'client_email'                => $this->client_email,
                    'no_handphone'                => $this->no_handphone,
                    'alamat'                      => $this->alamat,
                    'mulai'                       => $this->mulai,
                    'selesai'                     => $this->selesai,
                    'pic'                         => $this->pic,
                    'keterangan'                  => $this->keterangan,
                    'status'                      => $this->status,
                    'request'                     => $this->request,
                    'jumlah'                      => $this->jumlah,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect('/problem-list');
    }

    public function render()
    {
        return view('livewire.update-form');
    }
}
