<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postClick extends Model
{
    //
    protected $table = 'post_clicks';
	protected $fillable = ['post_id'];
	public $timestamps = false;
    public function post()
    {
        return $this->belongsTo('App\post');
    }
}
