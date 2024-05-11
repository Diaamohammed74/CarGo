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
        Schema::create('mechanicals_by_order', function (Blueprint $table) {
            $table->foreignId('mechanical_id')->constrained('mechanicals','user_id')->onDelete('cascade');
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
        Schema::dropIfExists('mechanicals_by_orders');
    }
};
