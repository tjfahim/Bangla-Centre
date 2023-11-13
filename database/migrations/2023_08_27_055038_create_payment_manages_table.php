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
        Schema::create('payment_manages', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); // Reference the 'users' table
            
            $table->unsignedBigInteger('hall_manage_id');
            $table->foreign('hall_manage_id')->references('id')->on('hall_manages');
            
            $table->unsignedBigInteger('booking_manage_id');
            $table->foreign('booking_manage_id')->references('id')->on('booking_manages')->onDelete('cascade');
        
            $table->string('payment_type');
            $table->string('status');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_manages');
    }
};
