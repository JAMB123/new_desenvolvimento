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
        Schema::create('animal_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animal');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('eventos');
            $table->timestamps();
            $table->unique(['animal_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_users');
    }
};
