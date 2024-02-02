<?php

namespace Database\Factories\Organisation;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organisation\Organisation;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $organisation = Organisation::first();
        return [
            //
            'department_name' => $this->faker->name(),
            'department_location' => $this->faker->address(),
            'organisation_id' => $organisation->id, // You can modify this to generate valid organisation IDs
        ];
    }
}
