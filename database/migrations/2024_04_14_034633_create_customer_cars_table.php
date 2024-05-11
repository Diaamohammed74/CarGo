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
        Schema::create('customer_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers','user_id')->onDelete('cascade');
            $table->string('model');
            $table->string('type');
            $table->string('color');
            $table->integer('plate_number');
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
        Schema::dropIfExists('customer_cars');
    }
};
