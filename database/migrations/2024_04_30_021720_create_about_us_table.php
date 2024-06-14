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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('ar_drName');
            $table->string('en_drName');
            $table->string('ar_job_specialization');
            $table->string('en_job_specialization');
            $table->string('phone_number');
            $table->string('email');
            $table->string('ar_title');
            $table->string('en_title');
            $table->string('ar_address');
            $table->string('en_address');
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->text('ar_footer_description')->nullable();
            $table->text('en_footer_description')->nullable();
            $table->string('dr_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
