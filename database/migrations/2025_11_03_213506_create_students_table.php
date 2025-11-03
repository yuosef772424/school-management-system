<?php
// database/migrations/2024_01_01_000003_create_students_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number', 50)->unique();
            $table->string('full_name');
            $table->string('email')->unique()->nullable();
            $table->string('phone', 20);
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');
            $table->text('address')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_phone', 20);
            $table->foreignId('specialization_id')->constrained()->cascadeOnDelete();
            $table->string('academic_year', 20);
            $table->date('enrollment_date');
            $table->enum('status', ['active', 'graduated', 'suspended'])->default('active');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('registration_number');
            $table->index('specialization_id');
            $table->index('status');
            $table->index('academic_year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
