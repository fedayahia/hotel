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
        Schema::create('owner__replies', function (Blueprint $table) {
            $table->id();
            $table->text('reply');
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('review_id')->constrained('reviews')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner__replies');
    }
};
