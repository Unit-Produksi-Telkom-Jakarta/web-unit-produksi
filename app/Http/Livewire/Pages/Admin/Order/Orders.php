<?php

namespace App\Http\Livewire\Pages\Admin\Order;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;

// third party library
use App\Excel\Order\FormatDownload;
use App\Excel\Order\OrderExport;
use App\Excel\Order\OrderImport;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Orders extends Component
{
    use WithFileUploads;

    public $dataToUpload;
    public $search;
    public $search_status;
    public $search_orderby = 'asc';

    public function render()
    {
        $orders = new Order();
        $orders = $orders->where([
            ['name' , 'LIKE' , "%{$this->search}%" , 'OR' ,
             'email', 'LIKE' , "%{$this->search}%"] , 
            ['status' , 'LIKE' , "%{$this->search_status}%"]])->orderBy('id', $this->search_orderby);
            
        return view('livewire.pages.admin.order.orders',[
            'orders' => $orders->paginate(5)
        ])->layoutData(['title' => 'Pesanan']);
    }

    public function create(){
        $this->emit('openModal', 'pages.admin.order.modal.create');
    }

    public function update($id){
        $this->emit('openModal', 'pages.admin.order.modal.edit' , ['id' => $id]);
    }

    public function delete($id){
        $this->emit('openModal', 'pages.admin.order.modal.delete' , ['id' => $id]);
    }
}
