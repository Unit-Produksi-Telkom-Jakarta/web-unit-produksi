<?php

namespace App\Http\Livewire;

use App\Exports\FormatDownload;
use App\Exports\FormExport;
use App\Imports\FormImport;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class AdminImportExport extends Component
{
    use WithFileUploads;

    public $dataToUpload;

    public function formatDownload(){
        return(new FormatDownload)->download('problem-list.xlsx');
    }

    public function exportXlsx(){
        return(new FormExport)->download('exported-problem-list.xlsx');
    }

    public function importXlsx(){
        $this->dataToUpload->store('formImport');
        $filename = $this->dataToUpload->hashName();

        Excel::import(new FormImport, storage_path("formImport/$filename"));

        $this->dataToUpload = null;
    }

    public function render()
    {
        return view('livewire.admin-import-export');
    }
}
