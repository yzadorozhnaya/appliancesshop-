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
		$wishlist = session()->get('wishlist');//dd(session()->regenerate());
		if ($wishlist) {
			$this->products=$wishlist;//dd($wishlist);
      // session(['wishlist'=>$this->products]);  
      //    dump(session()->all());
      $this->calc();
		}else{
			$this->products=[];
		}
   // dd(session(['wishlist'=>$this->products]));
	}

     public  function add($product,$count){
       $flag = true; //dd($product );
    foreach($this->products as $key => $product_Wishlist) {
        //dd($product_Wishlist);
           if($product_Wishlist['id']==$product->id) {
               //$this->products[$key]['count'] = $product_Wishlist['count']+$count;
               $flag = false;
               break;
           }
       }
       //dd($flag);
             if ($flag) {
              $this->products[]=[
                'id'=>$product->id,
                'price'=>$product->price,
                'count'=>$count
            ];
}
             $this->calc();
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
          $this->calc();
    }   
/*
     public  function change($id, $count){
        
        foreach ($this->products as $key => $product) {
            if ($product['id']==$id) {
                $this->products[$key]['count'] = $count;
                break;
            }
        } 
        $this->calc();
    }   */

    private  function calc(){
      $this->count = 0;
        
        foreach ($this->products as $product) {
            
            $this->count +=  $product['count'];
        }  
        session(['wishlist'=>$this->products]);  
        // dump(session()->all());
    }

    public function __destruct(){
        session(['wishlist'=>$this->products]);
        session(['wishlist',$this->products]);
       
    }     
}
