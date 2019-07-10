<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','articul','brand','image_path','description','price','category_id','updated_at','created_at','publish'];
    
    protected $table = 'products';

     public function category()
    {
        return $this->belongsTo('App\Categor', 'category_id');
    }

    
}
