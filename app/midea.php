<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class midea extends Model
{
    protected $fillable = [ 'm_url' , 'm_type' ,'m_ps_id','m_name' ] ;
    protected $primaryKey = 'm_id';
}
