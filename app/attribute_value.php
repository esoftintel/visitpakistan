<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribute_value extends Model
{
    //
    protected $fillable = [
        'atv_name','atv_at_id',
    ];
    protected  $primaryKey = 'atv_id';
}
