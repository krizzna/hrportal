<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empskill extends Model
{
    protected $table = 'employee_skills';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }

    public function skill()
    {
	return $this->belongsTo('App\Skill');
    }
}
