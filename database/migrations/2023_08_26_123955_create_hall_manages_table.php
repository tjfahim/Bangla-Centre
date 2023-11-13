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
        Schema::create('hall_manages', function (Blueprint $table) {
            $table->id();
            $table->string('hall_name');
            $table->text('hall_description')->nullable();
            $table->string('capacity')->nullable();
            $table->string('price');
            $table->unsignedDecimal('charity_discount')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_manages');
    }
};
