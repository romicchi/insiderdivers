<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTripTable extends Migration
{
    public function up()
    {
        Schema::create('client_trip', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('trip_id')->constrained()->onDelete('cascade');
            $table->date('booking_date');
            $table->string('pay_status');
            $table->string('special_reqs')->nullable();
            $table->string('trip_status');
            $table->integer('trip_rating')->nullable();
            $table->text('trip_notes')->nullable();
            $table->decimal('trip_cost', 10, 2);
            $table->integer('trip_duration')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_trip');
    }
}
