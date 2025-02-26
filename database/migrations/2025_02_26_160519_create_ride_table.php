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
        Schema::create('ride', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('passenger_id')->constrained()->onDelete('cascade');
            $table->foreignId('driver_id')->constrained()->onDelete('cascade');
            $table->dateTime('reservation_date');
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->enum('reservation_status', ['pending','not_accepted', 'accepted', 'cancelled'])->default('pending');
            $table->enum('ride_status', ['ongoing ','completed '])->default('ongoing');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride');
    }
};
