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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('video_category_id')->constrained('video_categories','id')->cascadeOnDelete();
            $table->string('video');
            $table->string('title');
            $table->string('description');
            $table->string('slug')->unique();
            $table->decimal('price',10,2);
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
        Schema::dropIfExists('videos');
    }
};
