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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id('adoption_id');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('adopter_id');

            $table->foreign('animal_id')->references('animal_id')->on('animals')->onDelete('cascade');
            $table->foreign('adopter_id')->references('adopter_id')->on('adopters')->onDelete('cascade');
            $table->text('reason');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
