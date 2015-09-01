<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empemergency extends Model
{
    protected $table = 'emergency_contacts';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employee()
    {
	return $this->belongsTo('App\Employee');
    }
}
