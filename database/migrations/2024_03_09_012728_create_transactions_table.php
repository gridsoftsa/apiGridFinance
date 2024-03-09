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
    Schema::create('transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('register_id')->constrained()->onDelete('cascade');
      $table->foreignId('category_id')->nullable()->constrained();
      $table->enum('type', ['ingreso', 'gasto'])->default('gasto')->comment('ingreso o gasto');
      $table->decimal('amount', 10, 2);
      $table->string('currency');
      $table->decimal('exchange_rate', 10, 2)->nullable();
      $table->text('description');
      $table->date('date');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transactions');
  }
};
