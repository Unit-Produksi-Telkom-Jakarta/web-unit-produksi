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
    public $search = '';
    public $orderBy = 'latest';
    public $data = false;

    public function render()
    {
        sleep(1);
        $orders = new Order();

        switch ($this->orderBy){
            case 'latest':
                $orders = $orders->orderBy('id', 'desc');
            break;
            default:
                $orders = $orders->orderBy('id','asc');
        }
        return view('livewire.pages.admin.order.orders',[
            'orders' => $orders->where('status', 'LIKE', "%{$this->search}%")->paginate(5)
        ])->layoutData(['title' => 'Pesanan' , 'data' => $this->data]);
    }

    public function create(){
        $this->data = true ;
    }

    public function update($id){
        $this->emit('openModal', 'pages.admin.order.modal.edit' , ['id' => $id]);
    }

    public function delete($id){
        $this->emit('openModal', 'pages.admin.order.modal.delete' , ['id' => $id]);
    }
}
