<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empcert extends Model
{
    protected $table = 'employee_certifications';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }

    public function certification()
    {
	return $this->belongsTo('App\Certification');
    }
}
