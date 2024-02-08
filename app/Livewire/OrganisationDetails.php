<?php

namespace App\Livewire;

use App\Models\Organisation\Organisation;
use Livewire\Component;

class OrganisationDetails extends Component
{
    public function render()
    {
        return view('livewire.organisation-details',['org' => Organisation::first()]);
    }
}
