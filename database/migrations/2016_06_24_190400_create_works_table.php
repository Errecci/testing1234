<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images',function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->string('descrizione');
            $table->string('meta_keys');
            $table->string('meta_description');
            $table->string('slug');
            $table->integer('anno');
            $table->string('url_sito');
            $table->string('imglavoro');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('ambito_id')->unsigned();
            $table->foreign('ambito_id')->references('id')->on('ambitos');
            $table->integer('tipologie_id')->unsigned();
            $table->foreign('tipologie_id')->references('id')->on('tipologies');
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
        Schema::drop('images');
    }
}
