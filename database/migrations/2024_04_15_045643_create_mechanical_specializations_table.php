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
    Schema::create('mechanical_specializations', function (Blueprint $table) {
        $table->foreignId('mechanical_id')
            ->constrained('mechanicals','user_id')
            ->cascadeOnDelete();

        $table->foreignId('specialization_id')
            ->constrained('specializations')
            ->cascadeOnDelete();

        $table->primary(['mechanical_id', 'specialization_id']);
    });
}


      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanical_specializations');
    }
};
