<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCricketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->string('role');
            $table->string('batting');
            $table->string('bowling');
            $table->string('image');
            $table->integer('odiRuns'); 
            $table->integer('country_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('players', function($table) {
            $table->foreign('country_id')->references('id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
