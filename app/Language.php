<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee_languages()
    {
	return $this->hasMany('App\Emplang');
    }
}
