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
        Schema::create('mechanical_full_times', function (Blueprint $table) {
            $table->foreignId('mechanical_id')->constrained('mechanicals','user_id')->cascadeOnDelete();
            $table->float('monthly_salary');
            $table->primary(['mechanical_id']);
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
        Schema::dropIfExists('mechanical_full_times');
    }
};
