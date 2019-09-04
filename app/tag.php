<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = array('tg_ct_id','tg_name', 'tg_green_icon','tg_wight_icon','tg_status');
    protected $primaryKey = 'tg_id';
}
