<?php

namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public  function index() {
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

	public  function cart() {
    return view('cart');
	}

   	public  function checkout() {
    return view('checkout');
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

		$product = Product::find($id);
		//dd($product);
    return view('product', ['product' => $product]);

	}	

	public  function register() {
    return view('register');
	}	

	public  function categories() {
    return view('categories');
	}

	public function shop($slug) {
		
        $category = Categor::where('slug',$slug)->first();
       // dd($category);
      	$products = Product::where('category_id',$category->id)->paginate(10);
      	//dd($products);
        return view('shop', ['products' => $products]);

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
