<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class DashboardStats extends Component
{
    public function render()
    {
        return view('livewire.dashboard-stats',['employees' => User::count()]);
    }
}
