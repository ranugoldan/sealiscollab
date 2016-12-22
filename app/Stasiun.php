<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stasiun extends Model
{
    protected $table='stasiun';

    public function wilayah()
    {
    	return $this->hasMany('App\Wilayah');
    }
}
