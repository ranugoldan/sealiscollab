<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';
    protected $fillable = ['cuaca','arahangin','kecmin', 'kecmax', 'tinggimin', 'tinggimax', 'wilayah_id'];

    public function wilayah()
    {
    	return $this->belongsTo('App\Wilayah');
    }
}
