<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Comment;
use URL;
use Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
	 
	public  function index() {
    $products = Product::all(); 
    return view('index',['products' => $products]);
    }

  public function newarrivals($slug) {		
    $category = Category::where('slug',$slug)->first();       
    $products = Product::where('category_id',$category->id)->paginate(10);      	
    return view('index',['products' => $products]);
    }

	public function home() {
    return view('home');
    }

	public  function about() {
    return view('about');
	}

	public  function forgot() {
    return view('forgot-password');
	}	

	public  function login() {
    return view('login');
	}	
	public  function register() {
    return view('register');
	}	

	public  function categories() {		
    return view('categories');
	}
	public  function terms() {
    return view('terms-conditions');
	}
	 
	
}
