<?php

namespace Database\Factories;

use App\Models\Organisation\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use App\Models\Organisation\Section;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $section = Section::inRandomOrder()->first();
        $role = Role::inRandomOrder()->first();

        return [
            'salary_reference_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['m','f']),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'position' => $this->faker->jobTitle(),
            'section_id' => $section->id, // You can modify this to generate valid section IDs
            'years_of_service' => $this->faker->numberBetween(1, 20),
            'education' => $this->faker->sentence(2),
            'role_id' => $role->id, // You can modify this to generate valid role IDs
            'date_of_employment' => $this->faker->date(),
            'national_id' => $this->faker->unique()->numberBetween(100000, 999999),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'marital_status' => $this->faker->randomElement(['single','married','divorced','widowed']),
            'tax_identification_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'social_security_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'bank_account_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'bank_name' => $this->faker->company(),
            'bank_branch' => $this->faker->company(),
            'salary_scale' => $this->faker->randomElement(['A','B','C','D']),
            'basic_salary' => $this->faker->numberBetween(10000, 99999),
            'housing_allowance' => $this->faker->numberBetween(10000, 99999),
            'transport_allowance' => $this->faker->numberBetween(10000, 99999),
            'other_allowance' => $this->faker->numberBetween(10000, 99999),
            'total_salary' => $this->faker->numberBetween(10000, 99999),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     */
    public function withPersonalTeam(callable $callback = null): static
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(fn (array $attributes, User $user) => [
                    'name' => $user->name.'\'s Team',
                    'user_id' => $user->id,
                    'personal_team' => true,
                ])
                ->when(is_callable($callback), $callback),
            'ownedTeams'
        );
    }
}
