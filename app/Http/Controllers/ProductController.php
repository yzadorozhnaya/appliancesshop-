<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use URL;
use Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
	public  function product($id, Request $request) {	
		$category_id = Product::find($id)->category_id;   
		$description =Category::find($category_id)->description;		
		$slug=Category::find($category_id)->slug;
		$product = Product::find($id);		
    $comments = Comment::where('product_id',$product->id)->paginate(10);
    $stok = Product::find($id)->is_publish;
    $count = Comment::where('product_id',$product->id)->count();
    $id=[];
      foreach($comments as $comment) {
        $id[] = $comment['user_id'];       
      }
    $users =  User::whereIn('id',$id)->get()->keyBy('id');
    return view('product', ['product' => $product, 'description'=>$description,'slug'=>$slug, 'comments'=>$comments,'users'=>$users, 'stok'=>$stok,'count'=>$count]);
	}	

	public function shop($slug,Request $request) {
    $category = Category::where('slug',$slug)->first(); 
      if ($request->ajax() && isset($request->start)) {
        $start = $request->start; 
        $end = $request->end; 
        $products = $category->product()->whereBetween('price', [$start, $end])
                             ->orderby('price', 'ASC')
                             ->paginate(10);
      //response()->json($products);
        return view('products', ['products' => $products]);
      } 
        $products = Product::where('category_id',$category->id)->paginate(10);
        return view('shop', ['products' => $products, 'slug' => $slug]);
   }   

    
  public function pricedown($slug) {
    $category = Category::where('slug',$slug)->first();        
    $products = Product::where('category_id',$category->id)->paginate(10);   
    return view('shop', ['products' => $products->sortByDesc('price'),'slug' => $slug]);
    }
    
  public function priceup($slug) {
    $category = Category::where('slug',$slug)->first();        
    $products = Product::where('category_id',$category->id)->paginate(10);   
    return view('shop', ['products' => $products->sortBy('price'),'slug' => $slug]);
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

   public  function addComment($id=null,  Request $request){    
    $comment= new Comment();
      if (auth()->check()) {
        $name = Auth::user()->name;
        $comment->name = $request->name;
        $comment->user_id = Auth::id();
        $comment->body=$request->comment;
      }
    $request->validate([
      'name'=> 'required|min:3|max:255',
      'sub'=>'required',
      'comment' => 'required',
    ]);
    $product = Product::find($id);    
    $comment->product_id=$product->id;
    $comment->article_id=0;
    $comment->parent_id=0; 
    $comment->rating = 1;
    $comment->fill($request->only('user_id','body','name'));
    $comment->save();
    return redirect(route('index'))->with('success','Ваш отзыв ' . $name . ' добавлен' . '!');
    }
	
}
