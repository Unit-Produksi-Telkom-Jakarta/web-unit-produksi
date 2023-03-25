<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Order;
use Livewire\Component;

class DailyReport extends Component
{
    public $order;

    public function downloadReport()
    {
        $conditions = [ 
            ['created_at', '>=', date('Y-m-d').' 00:00:00'],
            ['created_at', '<=', date('Y-m-d').' 23:59:59'],
        ];
        $this->order = Order::where($conditions)->get();
    }

    public function render()
    {
        return view('livewire.pages.admin.daily-report')->layoutData(['title' => 'Daily Report']);
    }
    public function mount(){
        $conditions = [ 
            ['created_at', '>=', date('Y-m-d').' 00:00:00'],
            ['created_at', '<=', date('Y-m-d').' 23:59:59'],
        ];
        $this->order = Order::where($conditions)->get();
    }
}
