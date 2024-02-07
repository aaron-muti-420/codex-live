<?php

namespace Database\Factories\Organisation;

use App\Models\Organisation\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['Chief', 'Senior', 'Manager', 'Supervisor', 'Intern', 'Contract'];
        $roleTitle = $this->faker->unique()->randomElement($roles);

        // Ensure unique role title
        while (Role::where('role_title', $roleTitle)->exists()) {
            $roleTitle = $this->faker->unique()->randomElement($roles);
        }

        return [
            'role_title' => $roleTitle,
        ];
    }
}
