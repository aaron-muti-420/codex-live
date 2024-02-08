<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

use function Laravel\Prompts\search;

class EmployeeList extends Component
{
    public $search = '';

    public function render()

    {
        return view('livewire.employee-list', ['users' => User::search($this->search)->paginate(5)]);
    }
}
