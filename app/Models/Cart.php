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
		if ($cart) {
			$this->products=$cart;
			$this->calc();
		}else{
			$this->products=[];
		}
	}

     public  function add($product,$count){
        $flag = true;
        //dd($this->products);
        //foreach ($this->products as &$product_cart) {
        //    if ($product_cart['id']==$product->id) {
//
        //        $product_cart['count'] += $count;
        //        $flag = false;
        //        break;
        //    }
        //}
       foreach($this->products as $key => $product_cart) {
           if($product_cart['id']==$product->id) {
               $products[$key]['count'] = $product_cart['count']+$count;
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
        //dd($id,$this->products);
        foreach ($this->products as $key => $product) {
           //dd($product['id'], $id);
                if ($product['id']==$id) { 
                    unset($this->products[$key]);
                    break;
                }
        }
        $this->calc(); 
    }   

     public  function change($id, $count){
        
        foreach ($this->products as $key => $product) {
            if ($product['id']==$id) {
                $this->products[$key]['count'] = $count;
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
