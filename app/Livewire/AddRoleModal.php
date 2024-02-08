<?php

namespace App\Livewire;

use Livewire\Component;

class AddRoleModal extends Component
{

    public $showModal = false;
    public $roleTitle;

    public function render()
    {
        return view('livewire.add-role-modal');
    }

    public function openModal()
    {
        $this->reset();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function addRole()
    {
        // Add logic to store the role in the database
        // You can use Eloquent or any other method here

        // After adding the role, close the modal
        $this->closeModal();
    }

}
