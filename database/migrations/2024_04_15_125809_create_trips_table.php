<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('trip_type');
            $table->date('trip_date');
            $table->date('ext_date')->nullable();
            $table->integer('year');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('leader_id')->constrained('leaders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
