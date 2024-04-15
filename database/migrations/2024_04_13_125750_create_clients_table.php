<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('shirt_size');
            $table->date('birthday');
            $table->string('whatsapp');
            $table->string('nationality');
            $table->string('interests');
            $table->string('dietary_reqs');
            $table->boolean('status')->default(0); // 0 for potential, 1 for confirmed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
