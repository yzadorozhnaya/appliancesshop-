<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id','user_id','article_id','body','updated_at','created_at', 'parent_id','product_id','rating'];

    protected $table = 'comments';

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

     public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
    
     public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
