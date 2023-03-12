<?php

namespace App\Http\Livewire\Pages\Admin\Order;

use Livewire\Component;
use App\Models\Order;

class Receipt extends Component
{
    public $order;

    public function render()
    {
        return view('livewire.pages.admin.order.receipt')->layoutData(['title' => 'Bukti Pemesanan']);;
    }

    public function mount($id){
        $this->order = Order::find($id);;
    }
}
