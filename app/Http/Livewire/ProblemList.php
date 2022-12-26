<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;
use Livewire\WithPagination;

class ProblemList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.problem-list',[
            'data' => Form::paginate(20)
        ]);
    }
}
