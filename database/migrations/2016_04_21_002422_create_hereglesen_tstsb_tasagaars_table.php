<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHereglesenTstsbTasagaarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('hereglesen_tstsb_tasagaars', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('meszasal_negj');$table->string('meszasal_ml');$table->string('dotor_negj');$table->string('dotor_ml');$table->string('havdar_negj');$table->string('havdar_ml');$table->string('turuh_negj');$table->string('turuh_ml');$table->string('huuhed_negj');$table->string('huuhed_ml');$table->string('gemtel_negj');$table->string('gemtel_ml');$table->string('busad_negj');$table->string('busad_ml');
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
        Schema::drop('hereglesen_tstsb_tasagaars');
    }
}