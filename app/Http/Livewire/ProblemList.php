<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;
use Livewire\WithPagination;

class ProblemList extends Component
{
    use WithPagination;

    public $search = '';
    public $orderBy = 'latest';

    public function render()
    {
        sleep(1);
        $problems = new Form();

        switch ($this->orderBy){
            case 'latest':
                $problems = $problems->orderBy('id', 'desc');
            break;
            default:
                $problems = $problems->orderBy('id','asc');
        }
        return view('livewire.problem-list',[
            'data' => $problems->where('status', 'LIKE', "%{$this->search}%")->paginate(20)
        ]);
    }
}
