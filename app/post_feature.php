<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_feature extends Model
{
    protected $fillable = array('pf_ps_id','pf_fe_id');
    protected $primaryKey = 'pf_id';
}
