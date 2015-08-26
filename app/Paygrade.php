<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paygrade extends Model
{
    protected $table = 'pay_grades';

    protected $guarded = ['id'];

    public $timestamps = false;
}
