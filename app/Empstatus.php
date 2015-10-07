<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empstatus extends Model
{
    protected $table = 'employement_status';

    protected $guarded = ['id'];

    public $timestamps = false;
}
