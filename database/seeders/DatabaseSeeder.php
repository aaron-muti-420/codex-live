<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Seeding Organisations...');
        $progressBar = new ProgressBar(new ConsoleOutput(), 1);
        $progressBar->start();
        \App\Models\Organisation\Organisation::factory(1)->create();
        $progressBar->advance();
        $progressBar->finish();
        $this->command->info('Organisations seeded successfully.');

        $this->command->info('Seeding Departments...');
        $progressBar = new ProgressBar(new ConsoleOutput(), 6);
        $progressBar->start();
        \App\Models\Organisation\Department::factory(6)->create();
        $progressBar->advance(6);
        $progressBar->finish();
        $this->command->info('Departments seeded successfully.');

        $this->command->info('Seeding Sections...');
        $progressBar = new ProgressBar(new ConsoleOutput(), 12);
        $progressBar->start();
        \App\Models\Organisation\Section::factory(12)->create();
        $progressBar->advance(12);
        $progressBar->finish();
        $this->command->info('Sections seeded successfully.');

        $this->command->info('Seeding Roles...');
        $progressBar = new ProgressBar(new ConsoleOutput(), 5);
        $progressBar->start();
        \App\Models\Organisation\Role::factory(5)->create();
        $progressBar->advance(5);
        $progressBar->finish();
        $this->command->info('Roles seeded successfully.');

        $this->command->info('Seeding Users...');
        $progressBar = new ProgressBar(new ConsoleOutput(), 20);
        $progressBar->start();
        \App\Models\User::factory(20)->create();
        $progressBar->advance(20);
        $progressBar->finish();
        $this->command->info('Users seeded successfully.');
    }
}


