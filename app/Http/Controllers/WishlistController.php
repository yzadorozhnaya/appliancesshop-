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
      
        $id = $request->id;
        $count = $request->count;
        //dd($count);
        $product = Product::find($id);

        $this->wishlist = new Wishlist();
        $this->wishlist->add($product, $count);
        return redirect(route('wishlist'));
    }  

    public  function wishlist(Request $request) {
        $this->wishlist = new Wishlist();
        $ids=[];
        foreach($this->wishlist->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
        return view('wishlist', [
        'wishlist'=> $this->wishlist,
        'products' => $products,
    ]);
    }
    public  function remove(Request $request){
        $id = $request->id;
        $this->wishlist = new Wishlist();
        $this->wishlist->remove($id);
        return redirect(route('wishlist'));
    }  

   /*  public  function change(Request $request){
        $id = $request->id;
        $count = $request->count;
        $this->wishlist = new Wishlist();
        $this->wishlist->change($id, $count);
        return redirect(route('wishlist'));
    }  */
    
}
