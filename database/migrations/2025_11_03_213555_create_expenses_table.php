<?php
// database/migrations/2024_01_01_000007_create_expenses_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expense_number', 50)->unique();
            $table->foreignId('category_id')->constrained('expense_categories');
            $table->decimal('amount', 10, 2);
            $table->text('description');
            $table->date('expense_date');
            $table->string('paid_to');
            $table->enum('payment_method', ['cash', 'bank_transfer', 'check'])->default('cash');
            $table->foreignId('approved_by')->constrained('users');
            $table->string('receipt_image')->nullable();
            $table->timestamps();
            
            $table->index('expense_number');
            $table->index('category_id');
            $table->index('expense_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
