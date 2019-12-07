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
		
		$category_id = Product::find($id)->category_id;
	    //dd($category_id);
		$description =Categor::find($category_id)->description;
		//dd($description);
		$slug=Categor::find($category_id)->slug;
//dd($slug);
		$product = Product::find($id);
		//dd($product );
    return view('product', ['product' => $product, 'description'=>$description,'slug'=>$slug]);

	}	

	public  function register() {

    return view('register');
	}	

	public  function categories() {
		
    return view('categories');
	}

	public function shop($slug) {
		//dd($slug);
		/*$url = URL::to('$products');
		dd($url);*/
		
        $category = Categor::where('slug',$slug)->first();
      	$products = Product::where('category_id',$category->id)->paginate(10);
        return view('shop', ['products' => $products/*,'category'=>$category*/]);
    }
    
    public function product_search(Request $request) {
    	//dd($request);
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
