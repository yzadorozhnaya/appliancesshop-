<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','user_id','phone','created_at','updated_at'];
    
    protected $table = 'orders';
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

