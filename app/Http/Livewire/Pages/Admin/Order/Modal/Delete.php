<?php

namespace App\Http\Livewire\Pages\Admin\Order\Modal;

use LivewireUI\Modal\ModalComponent;
use App\Models\Order;

class Delete extends ModalComponent
{
    public $order;

    public function render()
    {
        return view('livewire.pages.admin.order.modal.delete');
    }

    public function mount($id){
        $this->order = Order::find($id);;
    }

    public function delete(){
        $this->order->delete();

        session()->flash("success", "Data Berhasil dihapus");
        return redirect()->to("orders");
    }
}
