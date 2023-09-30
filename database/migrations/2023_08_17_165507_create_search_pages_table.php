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
        Schema::create('search_pages', function (Blueprint $table) {
            $table->id();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('hall');
            $table->string('period');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('booking_type');
            $table->float('price', 8, 2);
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_pages');
    }
};
