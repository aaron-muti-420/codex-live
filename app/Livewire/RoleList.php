<?php

namespace App\Livewire;

use Livewire\Component;

class RoleList extends Component
{
    public function render()
    {
        return view('livewire.role-list',['roles' => \App\Models\Organisation\Role::all()]);
    }
}
