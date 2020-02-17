<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{	

	private $cart;

    public  function add(Request $request){
        $id = $request->id;
        $count = $request->count;
        $product = Product::find($id);
        $this->cart = new Cart();
        $this->cart->add($product, $count); 
        return redirect(route('cart'));
    }  

    public  function cart(Request $request) {
        $this->cart = new Cart();
        $ids=[];
        foreach($this->cart->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
        return view('cart', [
        'cart'=> $this->cart,
        'products' => $products,
    ]);

    }
    public  function remove(Request $request){
        $id = $request->id;
        $this->cart = new Cart();
        $this->cart->remove($id);
        return redirect(route('cart'));
    }  

    public  function change(Request $request){
        $id = $request->id;
        $count = $request->count;
        $this->cart = new Cart();
        $this->cart->change($id, $count);
        return redirect(route('cart'));
        return redirect(route('checkout'));
    }  
     public  function checkout(Request $request) {
        $this->cart = new Cart();
        $ids=[];
        foreach($this->cart->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
         return view('checkout', [
        'cart'=> $this->cart,
        'products' => $products,
    ]);
    }

    public function buy(){
        $this->cart = new Cart();
        $body = '';
        if (auth()->check()) {
            $name = Auth::user()->name;
            $email = Auth::user()->email;
        }
         $ids=[];
         foreach ($this->cart->products as $product) {
            $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
        foreach ($this->cart->products as $product) {
            $body .="\r\n"."заказ"."\r\n". $products->get($product['id'])->name."\r\n"."цена"."\r\n". $product['price']."\r\n".'количество'."\r\n".$product['count'];
        }
        $sum=$this->cart->sum;
        if (auth()->check()) {
           $body.= "\r\n".$name."\r\n".$email."\r\n"."заказ общей стоимостью"."\r\n".$sum ;
        }
        $body.="\r\n"."заказ общей стоимостью"."\r\n".$sum ;
        $res = \Mail::raw($body, function($message){
             $message->from('domanytskya@gmail.com','domanytskya@gmail.com');
             $message->to('katya.zadorognay@gmail.com');
         });
        
        $this->cart->clear();
         return redirect(route('cart',[
            'cart'=> $this->cart,
            'products' => $products,
         ]))->with('success','Ви успішно зробили своє замовлення!');
     }
}
