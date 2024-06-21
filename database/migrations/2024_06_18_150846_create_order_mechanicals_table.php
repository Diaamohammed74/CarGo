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
        Schema::create('order_mechanicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mechanical_id')->nullable()->constrained('mechanicals','user_id')->nullOnDelete();
            $table->foreignId('order_id')->constrained('orders','id')->onDelete('cascade');
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
        Schema::dropIfExists('order_mechanicals');
    }
};
