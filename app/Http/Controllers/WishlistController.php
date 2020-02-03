<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{	

	private $wishlist;

    public  function add(Request $request){
      
        //dd($request->id);
        $id = $request->id;
        //dd($id);
        
        $product = Product::find($id);
      // dd($product);
        $this->wishlist = new Wishlist();
        
        $this->wishlist->add($product);
     //dd($this->wishlist) ;
        return redirect(route('wishlist'));
    }  

    public  function wishlist(Request $request) {
        
        $this->wishlist = new Wishlist(); //dd($this->wishlist) ;
        //dd($this->wishlist);
        //dd( $request);
        $ids=[];
        foreach($this->wishlist->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
       //dd($products);
        return view('wishlist', [
        'wishlist'=> $this->wishlist,
        'products' => $products,
    ]);
    }
    public  function remove(Request $request){
        //dd($request->id);
        $id = $request->id;
        $this->wishlist = new Wishlist();
        $this->wishlist->remove($id);
        //dd($this->wishlist);
        return redirect(route('wishlist'));
    }  

    
}
