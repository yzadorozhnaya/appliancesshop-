<?php

namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public  function index() {
		// $this->cart=new Cart();
		// $ids=[];
	 //        foreach($this->cart->products as $product) {
	 //           $ids[] = $product['id'];
	 //        }
  //       $products = Product::whereIn('id',$ids)->get()->keyBy('id');
		
    return view('index');
    }
	
	public function home() {
    return view('home');
    }

	public  function about() {
    return view('about');
	}

	public  function blog() {
		$article = Article::paginate(3);

    return view('blog', ['article' => $article]);
	}

	public  function contact() {
    return view('contact');
	}	

	public  function forgot() {
    return view('forgot-password');
	}	

	public  function login() {
    return view('login');
	}	

	public  function product($id) {
		$this->cart=new Cart();
		//\DB::enableQueryLog();
        //dd($product->category()->get(),
        //\DB::getQueryLog());
		// $ids=[];
	 //        foreach($this->cart->products as $product) {
	 //           $ids[] = $product['id'];
	 //        }
		// $products = Product::whereIn('id',$ids)->get()->keyBy('id');
		$product = Product::find($id);
    return view('product', ['product' => $product]);

	}	

	public  function register() {
    return view('register');
	}	

	public  function categories() {
		// $this->cart=new Cart();
		// $ids=[];
	 //        foreach($this->cart->products as $product) {
	 //           $ids[] = $product['id'];
	 //        }
  //       $products = Product::whereIn('id',$ids)->get()->keyBy('id');
    return view('categories');
	}

	public function shop($slug) {
		//$this->cart=new Cart();
        $category = Categor::where('slug',$slug)->first();
       //dd($category);
        // $ids=[];
	       //  foreach($this->cart->products as $product) {
	       //     $ids[] = $product['id'];
	       //  }
        // $products = Product::whereIn('id',$ids)->get()->keyBy('id');
      	$product = Product::where('category_id',$category->id)->paginate(10);
      	//dd($category->name);
      	//dd($products->name);
      	//dd($product->name);
        return view('shop', ['product' => $product]);

    }

	public  function single($slug) {
		$article = Article::where('slug', $slug)->first();
        
    return view('single-blog', ['article' => $article]);
	}	

	public  function terms() {
    return view('terms-conditions');
	}

	public  function wishlist() {
    return view('wishlist');
	}	
	 
	
}
