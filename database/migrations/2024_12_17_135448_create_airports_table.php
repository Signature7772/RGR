<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('name', 255);
            $table->string('code', 10)->unique();
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
