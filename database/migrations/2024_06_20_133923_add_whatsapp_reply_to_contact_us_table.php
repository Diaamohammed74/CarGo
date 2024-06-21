<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->text('whatssapp_reply');
            $table->foreignId('admin_id')->nullable()->constrained('admins', 'user_id')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
            $table->dropColumn(['whatssapp_reply', 'admin_id']);
        });
    }
};
