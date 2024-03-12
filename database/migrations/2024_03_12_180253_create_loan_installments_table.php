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
    Schema::create('loan_installments', function (Blueprint $table) {
      $table->id();
      $table->foreignId('loan_id')->constrained()->cascadeOnDelete();
      $table->integer('installment_number');
      $table->decimal('amount', 10, 2);
      $table->date('due_date');
      $table->date('paid_date')->nullable();
      $table->boolean('is_paid')->default(false);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('loan_installments');
  }
};
