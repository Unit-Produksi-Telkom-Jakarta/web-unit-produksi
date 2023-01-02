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
        $file=$this->dataToUpload;
        // $filename=$file->hashName();

        $save=$file->storeAs('/formImport',$file->hashName());

        // $filename = $this->dataToUpload->hashName();
        // dd($filename);
        if($save){
            Excel::import(new FormImport, $this->dataToUpload);
            return redirect('/problem-list');
        }
        $this->dataToUpload = null;
        
    }

    public function render()
    {
        return view('livewire.admin-import-export');
    }
}
