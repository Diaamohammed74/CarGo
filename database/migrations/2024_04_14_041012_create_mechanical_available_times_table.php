<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('mechanical_available_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('week_day_id')->nullable()->constrained('week_days','id')->nullOnDelete();
            $table->foreignId('mechanical_id')->constrained('mechanicals','user_id')->cascadeOnDelete();
            $table->time('start_at');
            $table->time('end_at');
            $table->timestamps();
        });
    }

      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanical_available_times');
    }
};
