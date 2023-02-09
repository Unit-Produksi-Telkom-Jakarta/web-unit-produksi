<?php

namespace App\Http\Livewire\Pages\Admin\Order\Modal;

use LivewireUI\Modal\ModalComponent;
use App\Models\Order;

class Edit extends ModalComponent
{
    public $order;

    protected $rules=[
        'order.name'                       => 'required',
        'order.email'                      => 'required|email',
        'order.phone_number'               => 'required',
        'order.address'                    => 'required',
        'order.start_estimation'           => 'required',
        'order.end_estimation'             => 'required',
        'order.pic'                        => 'required',
        'order.description'                => 'required',
        'order.status'                     => 'required',
        'order.request'                    => 'required',
        'order.price'                      => 'required',
    ];

    public function render()
    {
        return view('livewire.pages.admin.order.modal.edit');
    }

    public function mount($id){
        $this->order = Order::find($id);;
    }

    public function update(){
        $this->validate();
        $this->order->save();

        session()->flash("success", "Data Berhasil diubah");
        return redirect()->to("orders");
    }

}
