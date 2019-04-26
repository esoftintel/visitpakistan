<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $table = 'products';

   //Primary Key
   public $primaryKey = 'id';

   //Timestamps
   public $timestamp = true;

   protected $fillable = [
        
         'items', 'quantity', 'c_id', 'created_at',
   ];

   public function user()
   {
       return $this->belongsTo('App\User','c_id');
   }
}
