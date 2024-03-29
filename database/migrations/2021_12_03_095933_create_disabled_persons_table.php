<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisabledPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disabled_persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('disability');
            $table->integer('age');
            $table->integer('phone');
            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();  
            $table->unsignedBigInteger('disability_id');
            $table->timestamps();
            $table->foreign('disability_id')->references('id')->on('dis_persons_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disabled_persons');
    }
}
