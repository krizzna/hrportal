<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empstatus extends Model
{
    protected $table = 'employment_status';

    protected $guarded = ['id'];

    public $timestamps = false;
}
