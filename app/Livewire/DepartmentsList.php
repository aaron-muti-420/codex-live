<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organisation\Department;

class DepartmentsList extends Component
{
    public $search = '';

    public function index()
    {
        return view('departments.index');
    }

    public function show($id)
    {
        $department = Department::find($id);
        return view('departments.show',compact('department'));
    }

    public function render()
    {

        return view('livewire.departments-list', ['departments' => Department::withCount('sections')->search($this->search)->paginate(10)]);
    }
}
