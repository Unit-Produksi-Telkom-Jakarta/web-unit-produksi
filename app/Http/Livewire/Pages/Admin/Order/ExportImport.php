<?php

namespace App\Http\Livewire\Pages\Admin\Order;

use Livewire\Component;
use App\Models\Order;

// third party library
use App\Excel\Order\FormatDownload;
use App\Excel\Order\OrderExport;
use App\Excel\Order\OrderImport;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ExportImport extends Component
{
    use WithFileUploads;

    public $dataToUpload;
    public $search = '';
    public $orderBy = 'latest';

    public function render()
    {
        return view('livewire.pages.admin.order.export-import');
    }

    public function formatDownload(){
        return(new FormatDownload)->download('orders.xlsx');
    }

    public function exportXlsx(){
        return(new OrderExport)->download('exported-orders.xlsx');
    }

    public function importXlsx(){
        $file=$this->dataToUpload;

        $save=$file->storeAs('/orderImport',$file->hashName());

        if($save){
            Excel::import(new OrderImport, $this->dataToUpload);
            return redirect('/orders');
        }
        $this->dataToUpload = null;
        
    }
}
