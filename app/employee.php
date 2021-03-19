<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = ['name','email','phone','address','nid_no','experience','photo','salary','vacation','city'];
}
