<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Organisation\Organisation::factory(1)->create();
        \App\Models\Organisation\Department::factory(6)->create();
        \App\Models\Organisation\Section::factory(12)->create();
        \App\Models\Organisation\Role::factory(5)->create();
        \App\Models\User::factory(20)->create();


    }
}
