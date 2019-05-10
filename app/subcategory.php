<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    //
    protected $fillable = [
        'st_name','st_status','st_ct_id','st_status',
    ];
    protected  $primaryKey = 'st_id';
}
