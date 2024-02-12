<?php

namespace App\Livewire;

use App\Models\Organisation\Role;
use App\Models\Organisation\Section;
use App\Models\User;
use Livewire\Component;

class EmployeeCreateForm extends Component
{
    public $currentPage = 1;

    // Form properties
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $gender;
    public $national_id;
    public $phone_number;
    public $address;
    public $city;
    public $marital_status;
    public $profile_photo_path;

    //Staff Details
    public $email;
    public $email_verified_at;
    public $password;
    public $remember_token;
    public $supervisor_id;
    public $salary_reference_number;
    public $section_id;
    public $years_of_service;
    public $current_team_id;
    public $role_id;
    public $position;
    public $tax_identification_number;
    public $social_security_number;
    public $bank_account_number;
    public $bank_name;
    public $bank_branch;
    public $salary_scale;
    public $basic_salary;
    public $housing_allowance;
    public $transport_allowance;
    public $other_allowance;
    public $total_salary;

    //Documentation Details
    //Education Details
    public $education;

    public $created_at;
    public $updated_at;
    public $date_of_employment;

    public $roles = [];
    public $sections = [];
    public $supervisors = [];


    // Page information
    public $pages = [
        1 => [
            'title' => 'Personal Information',
            'description' => 'Enter your personal information',
        ],
        2 => [
            'title' => 'Employment Information',
            'description' => 'Enter your employment information',
        ],

    ];

    public function mount()
    {
        $this->roles = Role::all();
        $this->sections = Section::all();
        $this->supervisors = User::where('role_id', 2)->get();
    }



    public function submit()
    {

        $email = strtolower(substr($this->last_name, 0, 1) . $this->first_name . '@codex.com');
        $highestRefNumber = User::max('salary_reference_number');
        $newRefNumber = $highestRefNumber + 1;
        $defaultPassword = 'codex2024';
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'national_id' => $this->national_id,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'city' => $this->city,
            'marital_status' => $this->marital_status,
            'email' => $email,
            'password' => bcrypt($defaultPassword),
            'supervisor_id' => $this->supervisor_id,
            'salary_reference_number' => $newRefNumber,
            'section_id' => $this->section_id,
            'role_id' => $this->role_id,
            'position' => $this->position,
            'tax_identification_number' => $this->tax_identification_number,
            'social_security_number' => $this->social_security_number,
            'bank_account_number' => $this->bank_account_number,
            'bank_name' => $this->bank_name,
            'bank_branch' => $this->bank_branch,
            'salary_scale' => $this->salary_scale,
            'date_of_employment' => now(),
        ]);

        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        // Additional logic or actions after creating the user

        // Redirect or show success message
        $this->reset();
        return redirect()->route('dashboard');

    }

    public function nextPage()
    {
        $this->currentPage++;
    }

    public function previousPage()
    {
        $this->currentPage--;
    }

    public function render()
    {
        return view('livewire.employee-create-form');
    }

}
