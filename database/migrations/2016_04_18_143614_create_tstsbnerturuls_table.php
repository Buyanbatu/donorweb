<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTstsbnerturulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tstsbnerturuls', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('ner');$table->integer('value_id');$table->timestamp('uliral');$table->integer('active');$table->integer('adminactive');
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
        Schema::drop('tstsbnerturuls');
    }
}