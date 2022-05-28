<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->timestamps();
            $table->string('kind',20);
            $table->dog_id();
            $table->integer('situation');
            $table->integer('sex');
            $table->integer('vaccine');
            $table->integer('chip');
            $table->integer('ligation');
            $table->string('personality',50);
            $table->string('story',100);
            $table->date('birthday');
            $table->string('name',20);
            $table->string('pic',20);
            $table->integer('price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
