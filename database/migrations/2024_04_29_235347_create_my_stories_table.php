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
        Schema::create('my_stories', function (Blueprint $table) {
            $table->id();
            $table->string('ar_title1')->nullable();
            $table->string('en_title1')->nullable();
            $table->string('ar_title2')->nullable();
            $table->string('en_title2')->nullable();
            $table->text('ar_content')->nullable();
            $table->text('en_content')->nullable();
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_stories');
    }
};
