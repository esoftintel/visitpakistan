<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_tag extends Model
{
    protected $fillable = array('pt_ps_id','pt_tg_id');
    protected $primaryKey = 'pt_id';
}
