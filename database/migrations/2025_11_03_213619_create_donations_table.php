<?php
// database/migrations/2024_01_01_000009_create_donations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donation_number', 50)->unique();
            $table->foreignId('supporter_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->date('donation_date');
            $table->string('purpose')->nullable();
            $table->enum('payment_method', ['cash', 'bank_transfer', 'check'])->default('cash');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index('donation_number');
            $table->index('supporter_id');
            $table->index('donation_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
