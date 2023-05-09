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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('room')->nullable();
            $table->string('staying_sanur');
            $table->date('date')->nullable();
            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);
            $table->integer('infant')->default(0)->nullable();
            $table->integer('child_age')->nullable();
            $table->integer('long_cycle')->nullable();
            $table->string('special_req')->nullable();
            $table->string('hear_sanurcycle')->nullable();
            $table->integer('total_price')->default(0);
            $table->integer('total_dp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
