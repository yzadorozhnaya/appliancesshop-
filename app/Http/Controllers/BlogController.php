<?php
namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
  public  function blog() {
    $article = Article::paginate(8);
    return view('blog', ['article' => $article]);
  }

	public  function single($slug) {
    $articles = Article::paginate(8);
		$article = Article::where('slug', $slug)->first();   
    $comments = Comment::where('article_id',$article->id)->paginate(10); 
    $id=[];
      foreach($comments as $comment) {
        $id[] = $comment['user_id'];       
      } 
    $users =  User::whereIn('id',$id)->get()->keyBy('id');
    return view('single-blog', ['article' => $article,'articles' => $articles,'comments' => $comments,'users' => $users]);
	}	

  public  function blogsingle($id) {
    $category_id = Categor::where('id', $id)->first();
    $article = Article::where('category_id', $category_id->id)->paginate(8);
    return view('blog', ['article' => $article]);
  } 

   public function blogbuy($id=null, Request $request) {
      $body = '';
      $comment= new Comment();
      $comment->product_id=0;
      $comment->parent_id=0;
      $comment->user_id = 0;
      $comment->rating = 1;
        if (auth()->check()) {
          $name = Auth::user()->name;
          $email = Auth::user()->email;
          $comment->user_id = Auth::id();
          $comment->body=$request->comment;
          $sub=$request->subject;
          $com=$request->comment;
          $body.="\r\n".$name."\r\n".$email."\r\n".$sub."\r\n".$com."\r\n";
        }
        $request->validate([
      'name'=> 'required|min:4|max:255',
      'sub'=>'required',
      'comment' => 'required',
    ]);        
      $usr=$request->name;
      $email=$request->email;
      $sub=$request->sub;
      $com=$request->comment;
      $body.="\r\n".$usr."\r\n".$email."\r\n".$sub."\r\n".$com."\r\n";
      $res = \Mail::raw($body, function($message){
        $message->from('domanytskya@gmail.com','domanytskya@gmail.com');
        $message->to('katya.zadorognay@gmail.com');
      });
      $comment->body=$request->comment;
      $article = Article::find($id); 
      $comment->article_id=$article->id;
      $comment->name = $request->name;
      $comment->fill($request->only('id','user_id','article_id','body','name'));
      $comment->save();
      return redirect(route('index'))->with('success',$comment->name  .'Ви успішно відправили свій відгук!');
     }

}
