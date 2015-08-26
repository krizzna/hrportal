<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    public $timestamps = false;

    public function provinsi()
    {
	return $this->belongsTo('Provinsi');
    }

    public function kecamatans()
    {
	return $this->hasMany('App\Kecamatan');
    }
}
