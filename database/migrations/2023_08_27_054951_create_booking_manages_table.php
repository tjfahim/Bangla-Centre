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
        Schema::create('booking_manages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); // Assuming your users table is named 'users'
        
            $table->unsignedBigInteger('hall_manage_id');
            $table->foreign('hall_manage_id')->references('id')->on('hall_manages');
        
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->decimal('amount', 10, 2); // Assuming you want a decimal with 10 total digits and 2 decimal places
            $table->string('organization_type');
            $table->date('booking_date');
            $table->string('status')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_manages');
    }
};
