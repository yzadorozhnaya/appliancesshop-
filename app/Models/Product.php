<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','articul','brand','image_path','description','price','category_id','updated_at','created_at','publish'];
    
    protected $table = 'products';

     public function category()
    {
        return $this->belongsTo('App\Models\Categor', 'category_id');
    }

    
}
