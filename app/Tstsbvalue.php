<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tstsbvalue extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tstsbvalues';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['zahialsannegj', 'zahialsanml', 'huchinguinegj', 'huchinguiml'];




}