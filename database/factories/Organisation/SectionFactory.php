<?php

namespace Database\Factories\Organisation;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organisation\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $department = Department::inRandomOrder()->first();
        return [
            //
            'section_name' => $this->faker->name(),
            'department_id' => $department->id, // You can modify this to generate valid department IDs

        ];
    }
}
