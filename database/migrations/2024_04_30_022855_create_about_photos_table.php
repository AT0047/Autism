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
        Schema::create('about_photos', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_video');
            $table->string('sec1_photo');
            $table->string('sec2_photo');
            $table->string('sec4_photo');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_photos');
    }
};
