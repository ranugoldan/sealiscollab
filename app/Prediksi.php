<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    protected $table = 'prediksi';
    protected $fillable = ['cuaca','arahangin','kecmin', 'kecmax', 'tinggimin', 'tinggimax', 'wilayah_id'];

    public function wilayah()
    {
    	return $this->belongsTo('App\Wilayah');
    }
}
