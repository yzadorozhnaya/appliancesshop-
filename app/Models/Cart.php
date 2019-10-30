<?php

namespace App\Models;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Cart {

    public $products;
	public $count;
	public $sum;

	public function  __construct()
    {
        //dd($product, $count);
        //dd( session()->get('cart'));
		$cart = session()->get('cart');
        //dd($cart);
		if ($cart) {
			$this->products=$cart;
			$this->calc();
		}else{
			$this->products=[];
		}
	}

     public  function add($product,$count){
        $flag = true;
        
        foreach ($this->products as &$product_cart) {
            if ($product_cart['id']==$product->id) {
                $product_cart['count'] += $count;
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

     public  function remove(Request $request){
     	$id = $request->poducts_id;
        foreach ($this->products as &$product) {
                if ($product['id']==$id) {
                    unset($product);
                    break;
                }
        }
        $this->calc(); 
    }   

     public  function change(){
        $id = $request->poducts_id;
        $count = $request->count;
        foreach ($this->products as &$product) {
            if ($product['id']==$id) {
                $product['count'] += $count;
                break;
            }
        }	
        $this->calc();
    }   
     
     public  function clear(){
     	$this->products=[];
        $this->calc();        
    }  

    private  function calc(){
     	$this->count = 0;
        $this->sum = 0;
        foreach ($this->products as $product) {
            $this->sum += $product['price'] * $product['count'];
            $this->count +=  $product['count'];
        }  
        session(['cart'=>$this->products]);  
        // dump(session()->all());
    }

    public function __destruct(){
        session(['cart'=>$this->products]);
        session(['cart',$this->products]);
       
    }     
}
