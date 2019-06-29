<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id','title','slug','description','updated_at','created_at'];
    
    protected $table = 'articles';
}
