<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organisation\Department;

class DepartmentsList extends Component
{
    public $search = '';
    public function render()
    {

        return view('livewire.departments-list', ['departments' => Department::search($this->search)->paginate(10)]);
    }
}
