<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hackerspaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hacker_name');
            $table->string('alias_name');
            $table->integer('marks1');
            $table->integer('marks2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hackers');
    }
}
