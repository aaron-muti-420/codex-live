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
            'organisation_name' => $this->faker->name(),
            'organisation_logo' => $this->faker->imageUrl(),
            'organisation_mission' => $this->faker->sentence(5),
            'organisation_vision' => $this->faker->sentence(5),

        ];
    }
}
