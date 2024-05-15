<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('record_infos', function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId('record_id')
        ->constrained('records')
        ->cascadeOnDelete();
      $table->string('diagnose');
      $table->text('note');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('record_infos');
  }
};
