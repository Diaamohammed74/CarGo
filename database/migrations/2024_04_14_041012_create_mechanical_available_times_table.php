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
            $table->foreignId('mechanical_id')->constrained('mechanicals','user_id')->onDelete('cascade');
            $table->foreignId('week_day_id')->nullable()->constrained('week_days')->nullOnDelete();
            $table->time('start_at');
            $table->time('end_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mechanical_available_times');
    }
};
