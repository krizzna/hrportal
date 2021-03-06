<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empsalary extends Model
{
    protected $table = 'employee_salary';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }
}
