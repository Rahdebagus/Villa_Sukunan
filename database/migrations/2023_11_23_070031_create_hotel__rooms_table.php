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
        Schema::create('hotel__rooms', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('price');
            $table->string('capacity');
            $table->boolean('open')->default(false)->change();
            $table->foreignId("hotels_room")->constrained("hotels");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel__rooms');
    }
};
