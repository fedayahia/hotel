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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade'); // ارتباط بالفندق
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->integer('total_rooms');
            $table->text('amenities')->nullable();
            $table->integer('size')->nullable();
            $table->integer('total_beds')->nullable();
            $table->integer('total_bathrooms')->nullable();
            $table->integer('total_balconies')->nullable();
            $table->integer('total_guests')->nullable();
            $table->string('featured_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
