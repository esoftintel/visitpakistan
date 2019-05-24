<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $fillable = ['l_ps_id','l_u_id'];
    protected  $primaryKey = 'l_id';
}
