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
    Schema::create('fixed_transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->cascadeOnDelete();
      $table->foreignId('category_id')->nullable()->constrained();
      $table->enum('type', ['ingreso', 'gasto'])->default('gasto')->comment('ingreso o gasto');
      $table->decimal('amount', 10, 2);
      $table->string('currency')->default('COP');
      $table->decimal('exchange_rate', 10, 2)->nullable();
      $table->text('description');
      $table->date('start_date');
      $table->date('end_date')->nullable();
      $table->string('frequency');
      $table->boolean('is_completed')->default(false);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('fixed_transactions');
  }
};
