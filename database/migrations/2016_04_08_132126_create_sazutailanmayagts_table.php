<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSazutailanmayagtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('sazutailanmayagts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('gurav');$table->string('gurav1');$table->string('gurav2');$table->string('gurav3');$table->string('gurav4');$table->string('gurav5');$table->string('duruv');$table->string('duruv1');$table->string('duruv2');$table->string('duruv3');$table->string('duruv4');$table->string('tav1');$table->string('tav2');$table->string('tav3');$table->string('tav4');$table->string('tav5');$table->string('zurgaa1');$table->string('zurgaa2');$table->string('zurgaa3');$table->string('zurgaa4');$table->string('zurgaa5');$table->string('zurgaa6');$table->string('zurgaa7');$table->string('doloo');$table->string('doloo1');$table->string('doloo2');
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
        Schema::drop('sazutailanmayagts');
    }
}