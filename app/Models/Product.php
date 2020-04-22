<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','articul','brand','image_path','description','price','category_id','updated_at','created_at','publish'];
    
    protected $table = 'products';

     public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function getUrl()
    {
       return $this->category()->first()->slug;
    }
    
}
