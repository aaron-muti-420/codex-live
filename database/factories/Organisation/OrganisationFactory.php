<?php

namespace Database\Factories\Organisation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation\Organisation>
 */
class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'organisation_name' => "CodeCraft Innovations Ltd",
            'organisation_logo' => $this->faker->imageUrl(),
            'organisation_mission' => "To provide innovative software solutions that empower progress.",
            'organisation_vision' => "Empowering progress through innovative software solutions.",

        ];
    }
}
