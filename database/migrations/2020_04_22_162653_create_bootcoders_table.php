<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBootcodersTable extends Migration
{
    public function up()
    {
        Schema::create('bootcoders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->foreignId('codersgroup_id')->nullable();
            $table->foreign('codersgroup_id')->references('id')->on('codersgroups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcoders');
    }
}