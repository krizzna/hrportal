<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empcontract extends Model
{
    protected $table = 'employee_contracts';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }
}
