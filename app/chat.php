<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = ['ch_ps_id','ch_u_id','ch_message'];
    protected  $primaryKey = 'ch_id';
}
