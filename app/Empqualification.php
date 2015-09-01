<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empqualification extends Model
{
    protected $table = 'employee_educations';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }

    public function education()
    {
	return $this->belongsTo('App\Education');
    }
}
