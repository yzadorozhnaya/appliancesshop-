<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categor extends Model
{
    protected $fillable = ['id','name','description','publish', 'slug', 'parent_id'];
    
    protected $table = 'categories';

    public function child() {
        return $this->hasOne('App\Categor','parent_id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Categor','parent_id');
    }
}
