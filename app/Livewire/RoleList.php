<?php

namespace App\Livewire;

use App\Models\Organisation\Role;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class RoleList extends Component
{
    public $confirmingAddRole = false;
    public $confirmingRoleRemoval = false;
    public $search = '';
    public $role_title = '';
    public $role_id = '';

    public function index()
    {
        return view('roles.index');
    }


    public function mount()
    {
        $this->confirmingAddRole = false;
        $this->confirmingRoleRemoval = false;
        $this->search = '';
        $this->role_title = '';
        $this->role_id = '';
    }

    public function addRole()
    {
        $this->dispatch('confirming-add-role');
        $this->confirmingAddRole = true;
    }

    public function addRoleToDb()
    {
        $this->validate([
            'role_title' => 'required',
        ]);

        Role::create([
            'role_title' => $this->role_title,
        ]);

        $this->confirmingAddRole = false;
        $this->role_title = ''; // Clear the input after successful submission
    }

    public function confirmRoleRemoval($id)
    {
        $role = Role::find($id);
        $this->role_title = $role->role_title; // Set the role title for the confirmation message
        $this->dispatch('confirming-role-removal');
        $this->confirmingRoleRemoval = true;
        $this->role_id = $id;
    }

    public function deleteRole($id)
    {
        Role::destroy($id);
        $this->confirmingRoleRemoval = false;
    }


    public function render()
    {
        return view('livewire.role-list', [
            'roles' => Role::withCount('users')->search($this->search)->get(),
        ]);
    }

}
