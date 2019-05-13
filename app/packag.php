<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class packag extends Model
{
    //package Model
    protected $fillable = [
        'pk_title','pk_detail','pk_duration','pk_price','pk_ct_id',
        'pk_st_id'
    ];
    protected  $primaryKey = 'pk_id';
    public function category()
    {
        //return $this->hasOne('App\category', 'pk_ct_id', 'ct_id');
        return $this->hasOne('App\category', 'ct_id', 'pk_ct_id');
    }
    

}

