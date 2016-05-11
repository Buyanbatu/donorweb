<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tstsaction extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tstsactions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ActionName', 'ParentID'];

}