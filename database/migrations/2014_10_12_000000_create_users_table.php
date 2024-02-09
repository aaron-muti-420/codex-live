<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //Personal Details
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('national_id')->unique()->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            //Staff Details
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('supervisor_id')->nullable();
            $table->string('salary_reference_number')->unique()->nullable();
            $table->foreignId('section_id')->nullable();
            $table->integer('years_of_service')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->foreignId('role_id')->nullable();
            $table->string('position')->nullable();
            $table->string('tax_identification_number')->unique()->nullable();
            $table->string('social_security_number')->unique()->nullable();
            $table->string('bank_account_number')->unique()->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('salary_scale')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('housing_allowance')->nullable();
            $table->string('transport_allowance')->nullable();
            $table->string('other_allowance')->nullable();
            $table->string('total_salary')->nullable();


            //Documentation Details
            //Education Details
            $table->string('education')->nullable();

            $table->timestamps();
            $table->date('date_of_employment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
