<?php

use App\Utils\Constants;
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
        Schema::create('user_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("hotel_room_id")->constrained("hotel_rooms");
            $table->foreignId("coupon_id")->nullable()->constrained("coupons");
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_price');
            $table->enum('status', Constants::booking_status)->default("payment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_bookings');
    }
};
