<?php

namespace App\Http\Controllers;
use App\Categor;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public  function index() {
    return view('index', [
            'categories' => Categor::where('publish', 1)->get()
        ]);
    }
	
	 public function home() {
        return view('home', ['categories' => Category::where('is_publish', 1)->get()
        ]);
    }

	public  function about() {
    return view('about', ['categories' => Categor::where('publish', 1)->get()]);
	}

	public  function blog() {
    return view('blog', ['categories' => Categor::where('publish', 1)->get()]);
	}

	public  function cart() {
    return view('cart', ['categories' => Categor::where('publish', 1)->get()]);
	}

   	public  function checkout() {
    return view('checkout', ['categories' => Categor::where('publish', 1)->get()]);
	}

	public  function contact() {
    return view('contact', ['categories' => Categor::where('publish', 1)->get()]);
	}	

	public  function forgot() {
    return view('forgot-password', ['categories' => Categor::where('publish', 1)->get()]);
	}	

	public  function login() {
    return view('login', ['categories' => Categor::where('publish', 1)->get()]);
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

		$categories = Categor::all();

        return view('categories', ['categories' => $categories]);
	}

	public function shop($slug) {
		
        $category = Categor::where('slug',$slug)->first();
        
      	$products = Product::where('category_id',$category->id)->paginate(10);

        return view('shop', ['products' => $products, 'categories' => Categor::where('publish', 1)->get()]);

    }

	public  function single() {
    return view('single-blog', ['categories' => Categor::where('publish', 1)->get()]);
	}	

	public  function terms() {
    return view('terms-conditions', ['categories' => Categor::where('publish', 1)->get()]);
	}

	public  function wishlist() {
    return view('wishlist', ['categories' => Categor::where('publish', 1)->get()]);
	}	
		
}
