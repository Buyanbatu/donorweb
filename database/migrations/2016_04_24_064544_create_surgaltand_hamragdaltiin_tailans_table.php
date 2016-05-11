<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgaltandHamragdaltiinTailansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('surgaltand_hamragdaltiin_tailans', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('ih_emch_mdeeshuuleh_uildwerlel');$table->string('ih_emch_molgoh_uildwerlel');$table->string('tusgai_mdeeshluuleh_uildwerlel');$table->string('tusgai_molgoh_uildwerlel');$table->string('ih_emch_mdeeshuuleh_emnelzui');$table->string('ih_emch_molgoh_emnelzui');$table->string('tusgai_mdeeshuuleh_emnelzui');$table->string('tusgai_molgoh_emnelzui');$table->string('ih_emch_mdeeshuuleh_immune');$table->string('ih_emch_molgoh_immune');$table->string('tusgai_mdeeshuuleh_immune');$table->string('tusgai_molgoh_immune');$table->string('ih_emch_mdeeshluuleh_virus');$table->string('ih_emch_molgoh_virus');$table->string('tusgai_mdeeshluuleh_virus');$table->string('tusgai_molgoh_virus');$table->string('ih_emch_mdeeshluuleh_chanar');$table->string('ih_emch_molgoh_chanar');$table->string('tusgai_mdeeshluuleh_chanar');$table->string('tusgai_molgoh_chanar');$table->string('ih_emch_mdeeshluuleh_tstsb_hereglee');$table->string('ih_emch_molgoh_tstsb_hereglee');$table->string('tusgai_mdeeshluuleh_tstsb_hereglee');$table->string('tusgai_molgoh_tstsb_hereglee');
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
        Schema::drop('surgaltand_hamragdaltiin_tailans');
    }
}