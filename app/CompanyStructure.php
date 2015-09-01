<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyStructure extends Model
{
    protected $table = 'company_structures';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function employees()
    {
	return $this->hasMany('App\Employee');
    }
}
