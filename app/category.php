<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'ct_name','ct_icone',
    ];
    protected  $primaryKey = 'ct_id';
}
