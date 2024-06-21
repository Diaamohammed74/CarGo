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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers','user_id')->onDelete('cascade');
            $table->foreignId('customer_car_id')->constrained('customer_cars','id')->onDelete('cascade');
            $table->decimal('total_amount',10,2)->default(0);
            $table->unsignedTinyInteger('order_type')->default(1);
            $table->unsignedTinyInteger('order_status')->default(2);
            $table->unsignedTinyInteger('payment_status')->default(2);
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
        Schema::dropIfExists('orders');
    }
};
