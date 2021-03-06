<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name','description','publish', 'slug', 'parent_id'];
    
    protected $table = 'categories';

    public function child() {
        return $this->hasMany('App\Models\Category','parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category','parent_id');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
    
    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
    

}
