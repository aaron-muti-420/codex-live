<?php

namespace App\Livewire;

use App\Models\Organisation\Department;
use App\Models\Organisation\Section;
use App\Models\User;
use App\Models\Organisation\Role;
use Livewire\Component;

class DashboardStats extends Component
{
    public function render()
    {
        return view('livewire.dashboard-stats',['employees' => User::count(), 'departments' => Department::count(), 'sections' => Section::count(), 'latestUsers' => User::latest()->take(5)->get(), 'roles' => Role::withCount('users')->get()]);
    }
}
