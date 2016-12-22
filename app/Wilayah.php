<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table='wilayah';
    protected $fillable = ['nama', 'lat', 'lon', 'stasiun_id'];

    public function stasiun(){
    	return $this->belongsTo('App\Stasiun');
    }

    public function info(){
    	return $this->hasOne('App\Info');
    }
    public function prediksi(){
    	return $this->hasOne('App\Prediksi');
    }
}
