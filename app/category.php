<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'ct_name','ct_icone','ct_iconewhite', 'ct_image',
    ];
    protected  $primaryKey = 'ct_id';

    public function subcategory()
    {
        return $this->belongsTo(self::class, 'st_id', 'ct_id');
    }

    public function parent_category()
    {
        return $this->hasMany(self::class, 'st_id', 'ct_id');
    }
    public function subCats()
    {
        return $this->hasMany(self::class, 'ct_id', 'st_id');
    }
}
