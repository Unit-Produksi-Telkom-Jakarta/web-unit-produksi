<?php

namespace App\Http\Livewire\Pages\Admin\Order\Modal;

use LivewireUI\Modal\ModalComponent;
use App\Models\Order;

class Create extends ModalComponent
{
    public $orders;

    protected $rules=[
        'orders.name'                       => 'required',
        'orders.email'                      => 'required|email',
        'orders.phone_number'               => 'required',
        'orders.address'                    => 'required',
        'orders.start_estimation'           => 'required',
        'orders.end_estimation'             => 'required',
        'orders.pic'                        => 'required',
        'orders.description'                => 'required',
        'orders.status'                     => 'required',
        'orders.request'                    => 'required',
        'orders.price'                      => 'required',
    ];

    public function mount(){
        $this->orders = new Order();
    }

    public function render()
    {
        return view('livewire.pages.admin.order.modal.create');
    }

    public function save(){
        $this->validate();
        $this->orders->save();

        session()->flash("success", "Data Berhasil ditambahkan");
        return redirect()->to("orders");
    }

    public function resetOrder(){
        $this->reset('orders');
    }

}
