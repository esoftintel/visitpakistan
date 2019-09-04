<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $fillable = ['rp_cm_id','rp_u_id','rp_reply'];
    protected  $primaryKey = 'rp_id';
}
