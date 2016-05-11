<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hun_huchnii_tailan extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hun_huchnii_tailans';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ih_emch_bugd', 'ih_emch_orontoo', 'baga_emch_bugd', 'baga_emch_orontoo', 'suvilagch_bugd', 'suvilagch_orontoo', 'laborant_bugd', 'laborant_orontoo', 'ariutgagch_bugd', 'ariutgagch_orontoo', 'uilchlegch_bugd', 'uilchlegch_orontoo', 'busad_mergejilten_bugd', 'busad_mergejilten_orontoo'];

}