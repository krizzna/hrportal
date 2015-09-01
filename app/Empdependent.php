<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empdependent extends Model
{
    protected $table = 'employee_dependents';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }
}
