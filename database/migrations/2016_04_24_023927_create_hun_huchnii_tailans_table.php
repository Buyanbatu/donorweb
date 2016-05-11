<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHunHuchniiTailansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('hun_huchnii_tailans', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('ih_emch_bugd');$table->string('ih_emch_orontoo');$table->string('baga_emch_bugd');$table->string('baga_emch_orontoo');$table->string('suvilagch_bugd');$table->string('suvilagch_orontoo');$table->string('laborant_bugd');$table->string('laborant_orontoo');$table->string('ariutgagch_bugd');$table->string('ariutgagch_orontoo');$table->string('uilchlegch_bugd');$table->string('uilchlegch_orontoo');$table->string('busad_mergejilten_bugd');$table->string('busad_mergejilten_orontoo');
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
        Schema::drop('hun_huchnii_tailans');
    }
}