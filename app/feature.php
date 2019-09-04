<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    protected $fillable  = array('fe_name','fe_ct_id');
    protected $primaryKey = 'fe_id';
}
