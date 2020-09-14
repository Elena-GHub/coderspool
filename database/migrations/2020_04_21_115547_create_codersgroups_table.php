<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodersgroupsTable extends Migration
{
    public function up()
    {
        Schema::create('codersgroups', function (Blueprint $table) {
            $table->id();
            $table->string('groupname')->nullable();
            $table->string('groupmembers')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codersgroups');
    }
}