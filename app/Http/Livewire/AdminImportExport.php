<?php

namespace App\Http\Livewire;

use App\Imports\UserImport;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;


class AdminImportExport extends Component
{
    use WithFileUploads;

    public $file;

    public function import(){
        // $this->validate([

        //     'file' => 'file|mimes:xlsx|max:5120', // 1MB Max

        // ]);

        Excel::import(new UserImport, request()->file($this->file));
        session()->flash('message', 'Data Berhasil di Import!');
    }

    public function render()
    {
        return view('livewire.admin-import-export');
    }
}
