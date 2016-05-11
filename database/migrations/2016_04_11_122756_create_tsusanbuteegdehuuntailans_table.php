<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsusanbuteegdehuuntailansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tsusanbuteegdehuuntailans', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('talbar1');$table->string('talbar2');$table->string('talbar3');$table->string('talbar4');$table->string('talbar5');$table->string('talbar6');$table->string('talbar7');$table->string('talbar8');$table->string('talbar9');$table->string('talbar10');$table->string('talbar11');$table->string('talbar12');$table->string('talbar13');$table->string('talbar14');$table->string('talbar15');$table->string('talbar16');$table->string('talbar17');$table->string('talbar18');
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
        Schema::drop('tsusanbuteegdehuuntailans');
    }
}