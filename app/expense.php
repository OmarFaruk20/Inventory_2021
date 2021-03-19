<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    protected $fillable = ['details','amount','month','date'];
}
