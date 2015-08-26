<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyStructure extends Model
{
    protected $table = 'company_structures';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function parents()
    {
	return $this->hasMany('App\CompanyStructure');
    }
	
}
