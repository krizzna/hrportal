<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emplang extends Model
{
    protected $table = 'employee_languages';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }

    public function language()
    {
	return $this->belongsTo('App\Language');
    }
}
