<?php

namespace App\Http\Controllers;
use App\Categor;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public  function index() {
    return view('index', [
            'categories' => Categor::where('publish', 1)->get()
        ]);
    }
//fore

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

	public  function product() {
    return view('product', ['categories' => Categor::where('publish', 1)->get()]);
	}	

	public  function register() {
    return view('register');
	}	


	public  function shop() {

		$categories = Categor::all();
	
		//dd($categories);
        return view('shop', ['categories' => $categories]);
	}

	public function slug($slug) {

        $category = Categor::where('slug',$slug)->first();
      
        return view('shop', ['categories' => $category, 'categories' => Categor::where('is_publish', 1)->get()]);

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
