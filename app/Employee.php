<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function company_structure()
    {
	return $this->belongsTo('App\CompanyStructure');
    }

    public function emergency_contacts()
    {
	return $this->hasMany('App\Empemergency');
    }

    public function dependents()
    {
	return $this->hasMany('App\Empdependent');
    }

    public function salary()
    {
	return $this->hasMany('App\Empsalary');
    }

    public function educations()
    {
	return $this->hasMany('App\Empqualification');
    }

    public function experiences()
    {
	return $this->hasMany('App\Empwork');
    }

    public function skills()
    {
	return $this->hasMany('App\Empskill');
    }

    public function certifications()
    {
	return $this->hasMany('App\Empcert');
    }

    public function languages()
    {
	return $this->hasMany('App\Emplang');
    }
}
