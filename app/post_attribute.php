<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_attribute extends Model
{
    protected $fillable = [
        'pt_title','pt_value','pt_ps_id'];
    protected  $primaryKey = 'pt_id';
}
