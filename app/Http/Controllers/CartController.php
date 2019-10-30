<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{	

	private $cart;

   // public function __construct(){
        
          //  $this->cart = new Cart();
            //dd($this->cart);
     //  }
    public  function add(Request $request){

       //dd($request);
        //$id = $request->id;
       // $count = $request->count;
        //$product = Product::find($id); 
        //dd( $this->cart);
        //$this->cart->add($product,$count);
        //dd($this->cart);

        $id = $request->id;
        //dd($id);
        $count = $request->count;
        //dd($count);
        //if($count == null) {
            //$count = 1;
        //}
        $product = Product::find($id);
        //dd($product);
        $this->cart = new Cart();
        //dd($this->cart);
        //dd($product, $count);
        $this->cart->add($product, $count);
        //dd($this->cart);
        return redirect(route('cart'));
    }  

   public  function cart(Request $request) {
       // dd($this->cart);
       
        $this->cart = new Cart();
        //dd(session()->all());
        //$ids=[];
        foreach($this->cart->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
        
        return view('cart', [
        'cart'=> $this->cart,
        'products' => $products
    ]);
    }
}
