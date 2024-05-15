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
    Schema::create('hospitals', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('address');
      $table->string('bin');
      $table->string('phone');
      $table->string('email')->nullable();
      $table->boolean('favourite');
      $table->double('rating');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('hospitals');
  }
};
