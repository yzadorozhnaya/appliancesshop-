<?php

namespace App\Models;

use \App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Wishlist {

    public $products;
   // public $count=1;

	public function  __construct()
    {
		$wishlist = session()->get('wishlist');//dd(session()->regenerate());
		if ($wishlist) {
			$this->products=$wishlist;//dd($wishlist);
       session(['wishlist'=>$this->products]);  
      //    dump(session()->all());
      
		}else{
			$this->products=[];
		}
   // dd(session(['wishlist'=>$this->products]));
	}

     public  function add($product){
       $flag = true; 
    foreach($this->products as $key => $product_cart) {
        //dd($product_cart);
           if($product_cart['id']==$product->id) {
               
               $flag = false;
               break;
           }
       }
       //dd($flag);
             if ($flag) {
              $this->products[]=[
                'id'=>$product->id,
                'price'=>$product->price,
               
            ];
}
            session(['wishlist'=>$this->products]);
            //dd( $this->products);
       
    }  
     public  function remove($id){
        //dd($id);
      //dd($this->products);
        foreach ($this->products as $key => $product) {
          // dd($product, $id);
                if ($product['id']==$id) { 
                    unset($this->products[$key]);
                    break;
                }
        }
         session(['wishlist'=>$this->products]);
    }   


    public function __destruct(){
        session(['wishlist'=>$this->products]);
        session(['wishlist',$this->products]);
       
    }     
}
