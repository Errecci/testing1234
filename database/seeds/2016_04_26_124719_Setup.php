<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setup extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


Schema::create('users', function(Blueprint $table)
{
    $table->increments('id');

    $table->string('first_name');
    $table->string('last_name');
    $table->string('slug')->index();

    $table->string('email')->unique();
    $table->string('password', 60);
    $table->rememberToken();

    $table->timestamps();
});


Schema::create('tipologies', function(Blueprint $table)
{
    $table->increments('id');
    $table->string('nome');
    $table->string('slug')->index();
    $table->text('descrizione');
    
    $table->timestamps();
});

Schema::create('ambitos', function(Blueprint $table)
{
    $table->increments('id');
    $table->string('nome');
    $table->string('slug')->index();
    $table->text('descrizione');

    $table->timestamps();
});



Schema::create('clients', function(Blueprint $table)
{
    $table->increments('id');
    $table->string('ragione_sociale');
    $table->string('descrizione');
    $table->string('slug')->index();
    $table->string('logo');

    $table->integer('tipologie_id')->unsigned()->index();
    $table->foreign('tipologie_id')->references('id')->on('tipologies');

    $table->timestamps();
});





Schema::create('works', function(Blueprint $table)
{
    $table->increments('id');

    $table->string('titolo');
    $table->string('descrizione');
    $table->string('slug')->index();
    $table->string('imglavoro');

    $table->boolean('is_published'); 
    $table->dateTime('published_at'); 
    $table->string('meta_keys'); 
    $table->string('meta_description');

    $table->integer('user_id')->unsigned()->index();
    $table->integer('client_id')->unsigned()->index();
    $table->integer('ambito_id')->unsigned()->index();
    $table->integer('tipologie_id')->unsigned()->index();

    $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('client_id')->references('id')->on('clients');
    $table->foreign('tipologie_id')->references('id')->on('tipologies');
    $table->foreign('ambito_id')->references('id')->on('ambitos');



// assegnazione foreign key

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
        Schema::drop('users');
        Schema::drop('tipologies');
        Schema::drop('ambitos');
        Schema::drop('clients');
        Schema::drop('tipologie_client');
        Schema::drop('works');
      
    }

}