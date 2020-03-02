<?php

namespace App\Http\Controllers;
use App\Models\Categor;
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

	public  function product($id, Request $request) {
		
		$category_id = Product::find($id)->category_id;
   
		$description =Categor::find($category_id)->description;
		
		$slug=Categor::find($category_id)->slug;

		$product = Product::find($id);
		
    $comments = Comment::where('product_id',$product->id)->paginate(10);
    
    $id=[];
      foreach($comments as $comment) {

        $id[] = $comment['user_id'];
       
      }
    $users =  User::whereIn('id',$id)->get()->keyBy('id');
 
   
    return view('product', ['product' => $product, 'description'=>$description,'slug'=>$slug, 'comments'=>$comments,'users'=>$users]);

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

    $article = Article::where('category_id', $category_id->id)->paginate(8);

    return view('blog', ['article' => $article]);

  } 

   public function blogbuy(Request $request){

      $body = '';

        if (auth()->check()) {

          $usr = Auth::user()->name;

          $email = Auth::user()->email;

          $sub=$request->subject;

          $comment=$request->comment;

          $body.="\r\n".$name."\r\n".$email."\r\n".$sub."\r\n".$comment."\r\n";

        }
      $name=$request->name;

      $email=$request->email;

      $sub=$request->sub;

      $comment=$request->comment;

      $body.="\r\n".$name."\r\n".$email."\r\n".$sub."\r\n".$comment."\r\n";

      $res = \Mail::raw($body, function($message){

        $message->from('domanytskya@gmail.com','domanytskya@gmail.com');

        $message->to('katya.zadorognay@gmail.com');

      });

      return redirect(route('index'))->with('success','Ви успішно відправили свій відгук!');

     }

   public  function addComment($id=null,  Request $request){
    
    $comment= new Comment();

      if (auth()->check()) {

        $name = Auth::user()->name;

        $email = Auth::user()->email;

        $comment->user_id = Auth::id(); 

        $comment->body=$request->comment;

      }

    $request->validate([

      'name'=> 'required|min:8|max:255',
      'sub'=>'required',
      'comment' => 'required',

    ]);

    $comment->body=$request->comment;

    $product = Product::find($id);
    
    $comment->product_id=$product->id;

    $comment->article_id=0;

    $comment->parent_id=0;

    

    $comment->fill($request->only('user_id','body'));

    $comment->save();

    return redirect(route('index'))->with('success','Ваш отзыв ' . $name . ' добавлен' . '!');

    }    

	public  function terms() {

    return view('terms-conditions');
	}
	 
	
}
