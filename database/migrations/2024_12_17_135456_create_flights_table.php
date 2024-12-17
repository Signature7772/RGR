<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_airport_id');
            $table->unsignedBigInteger('to_airport_id');
            $table->string('flight_number', 10)->unique();
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->timestamps();

            $table->foreign('from_airport_id')->references('id')->on('airports')->onDelete('cascade');
            $table->foreign('to_airport_id')->references('id')->on('airports')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
