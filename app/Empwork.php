<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empwork extends Model
{
    protected $table = 'employee_work_experience';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }
}
