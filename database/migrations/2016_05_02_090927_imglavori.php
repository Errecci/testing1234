<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imglavori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

    Schema::create('images', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titolo');
            $table->string('url_lavoro');
            $table->string('colonna');
            $table->string('ordinamento');
            $table->integer('work_id')->unsigned();
            $table->timestamps();


            $table->foreign('work_id')
                    ->references('id')
                    ->on('works')
                    ->onDelete('cascade'); 
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
