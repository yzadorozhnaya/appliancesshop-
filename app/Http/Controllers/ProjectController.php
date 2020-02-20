<?php

namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Cart;
use URL;
use Route;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	
	public  function index() {

      	$products = Product::all();
		
    return view('index',['products' => $products]);
    }

    public function newarrivals($slug) {
		
        $category = Categor::where('slug',$slug)->first();
       
      	$products = Product::where('category_id',$category->id)->paginate(10);
      	
    return view('index',['products' => $products]);
    }

	public function home() {
    return view('home');
    }

	public  function about() {
    return view('about');
	}

	public  function blog() {
		$article = Article::paginate(8);

    return view('blog', ['article' => $article]);
	}

	public  function forgot() {
    return view('forgot-password');
	}	

	public  function login() {
    return view('login');
	}	

	public  function product($id) {
		
		$category_id = Product::find($id)->category_id;

		$description =Categor::find($category_id)->description;
		
		$slug=Categor::find($category_id)->slug;

		$product = Product::find($id);
		
    return view('product', ['product' => $product, 'description'=>$description,'slug'=>$slug]);

	}	

	public  function register() {

    return view('register');
	}	

	public  function categories() {
		
    return view('categories');
	}

	public function shop($slug) {
		
        $category = Categor::where('slug',$slug)->first();
        
      	$products = Product::where('category_id',$category->id)->paginate(10);
      	
        return view('shop', ['products' => $products]);
    }
    
    public function product_search(Request $request) {
    	
         $name = $request->name;
         $brand = $request->brand;
         $products = Product::query();
         if($brand){
            $products_s = $products->where('brand', 'like', $brand.'%');
        }
        if($name){
            $products_s = $products->where('name', 'like', $name.'%');
        }
        
        $array = $products_s->get()->toArray();
        return response()->json($array);
    }

	public  function single($slug) {
    $articles = Article::paginate(8);
		$article = Article::where('slug', $slug)->first();
     
    return view('single-blog', ['article' => $article,'articles' => $articles]);
	}	

  public  function blogsingle($id) {
 $category_id = Categor::where('id', $id)->first();
 //dd($category_id);
    $article = Article::where('category_id', $category_id->id)->paginate(8);
     // dd($article);  
    return view('blog', ['article' => $article]);
  } 

	public  function terms() {

    return view('terms-conditions');
	}
	 
	
}
