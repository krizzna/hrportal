<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'certifications';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee_certifications()
    {
	return $this->hasMany('App\Empcert');
    }
}
