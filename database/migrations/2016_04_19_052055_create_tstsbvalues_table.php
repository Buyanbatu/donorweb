<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTstsbvaluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tstsbvalues', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('array1');$table->string('array2');$table->string('array3');$table->string('array4');
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
        Schema::drop('tstsbvalues');
    }
}