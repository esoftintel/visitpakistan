<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
  //Primary Key
  public $primaryKey = 'r_id';

  //Timestamps
  public $timestamp = true;

  protected $fillable = ['r_comment', 'r_rating', 'r_ps_id','r_u_id'];
}
