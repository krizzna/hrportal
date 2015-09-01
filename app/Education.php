<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee_qualifications()
    {
	return $this->hasMany('App\Empqualification');
    }
}
