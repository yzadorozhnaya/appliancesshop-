<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id','title','slug','description','updated_at','created_at','category_id'];
    
    protected $table = 'articles';

     public function category()
    {
        return $this->belongsTo('App\Models\Categor', 'category_id');
    }
     
}
