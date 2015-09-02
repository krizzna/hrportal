<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee_skills()
    {
	return $this->hasMany('App\Empskill');
    }
}
