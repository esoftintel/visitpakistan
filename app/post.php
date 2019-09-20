<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'ps_title','ps_detail','ps_price','ps_address','ps_ct_id','ps_st_id','ps_ur_id','ps_lati','ps_longi','ps_views'];
    protected  $primaryKey = 'ps_id';
}
