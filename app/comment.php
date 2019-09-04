<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['cm_ps_id','cm_u_id','cm_comment'];
    protected  $primaryKey = 'cm_id';
}
