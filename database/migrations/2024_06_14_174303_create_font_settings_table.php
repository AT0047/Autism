<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('font_settings', function (Blueprint $table) {
            $table->id();
            $table->string('ar_font_family')->default('Arial, sans-serif');
            $table->string('ar_font_size')->default('16px');
            $table->string('en_font_family')->default('Arial, sans-serif');
            $table->string('en_font_size')->default('16px');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('font_settings');
    }
};
