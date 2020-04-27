<?php

namespace App\Models;

use \App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Wishlist {

    public $products;
    public $count=0;

	public function  __construct()
    {
		$wishlist = session()->get('wishlist');
		if ($wishlist) {
			$this->products=$wishlist;
      $this->calc();
		}else{
			$this->products=[];
		}
	}

  public  function add($product,$count){
    $flag = true; 
    foreach($this->products as $key => $product_Wishlist) {
      if($product_Wishlist['id']==$product->id) {
        $flag = false;
      break;
      }
    }
    if ($flag) {
      $this->products[]=[
        'id'=>$product->id,
        'price'=>$product->price,
        'count'=>$count
      ];
    }
    $this->calc();
    }  
    
  public  function remove($id){
    foreach ($this->products as $key => $product) {
      if ($product['id']==$id) { 
          unset($this->products[$key]);
          break;
      }
    }
    $this->calc();
  }

  private  function calc(){
    $this->count = 0;      
      foreach ($this->products as $product) {
        $this->count +=  $product['count'];
      }  
      session(['wishlist'=>$this->products]); 
  }

  public function __destruct(){
    session(['wishlist'=>$this->products]);
    session(['wishlist',$this->products]);     
  }     
}
