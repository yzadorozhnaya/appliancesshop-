<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{   
    public  function admin(){

        return view('admin.admin');

    }  

    public  function adminUsersList() 
    {
        $users = User::paginate(10);

        return view('admin.users.list', [ 
        'users' => $users]);

    }   
    public  function adminUsersCreate(){

        return view('admin.users.edit');

    }   

    public  function adminUsersEdit($id){

    	$user =  User::find($id);

        return view('admin.users.edit', [ 
    	'user' => $user]);

    }	

    public  function adminUsersSave($id=null, Request $request){

        if($id) {

            $user =  User::find($id);

        } else {

        $user= new User();

        }

        $email_rules = 'required|email';

        if ($user->isDirty('email')) {

            $email_rules = $email_rules. '|unique:users,email';

        }

        $request->validate([

            'name'=> 'required|min:8|max:255',
            'email'=> $email_rules,
            'password' => 'required|min:8',

        ]);

    	$user->fill($request->only('name', 'email', 'password'));

        $user->password = \Hash::make($request->password);

    	$user->save();

        return redirect(route('admin.users.list'))->with('success','Пользователь ' . $user->name . ' добавлен' . '!');
    }

    public  function adminUsersDelete($id) 

    {
        $user =  User::find($id);

        $user->delete();

        return redirect()->back()->with('success','Успешно удлен');
    }

    public  function adminProductsList() 
    {
        $products = Product::paginate(10);

        return view('admin.products.list', [ 
        'products' => $products]);
    }   
    public  function adminProductsCreate() 
    {
        return view('admin.products.edit');
    }   

    public  function adminProductsEdit($id) 
    {
        $product =  Product::find($id);

        return view('admin.products.edit', [ 
        'product' => $product]);

    }   

    public  function adminProductsSave($id=null, Request $request){
        
        if($id){

            $product =  Product::find($id);

        } else {

            $product= new Product();
            $product->is_publish = false;
        }
        $request->validate([

            'name' => 'required|max:255',
            'articul' => 'required|max:255',
            'brand' => 'required',
            'image_path' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|max:11'

        ]);
//dd($request->allFiles());
        $product->fill($request->only('name', 'articul', 'brand'/*, 'image_path'*/, 'description', 'price', 'category_id', 'is_publish'));

         if ($request->has('image_path')) {
            
            $image = $request->file('image_path');
            //dd($image);
            $name = md5(time());
            $folder = '/img/products/'.$product->getUrl().'/';
        //dd($folder);
            
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            //dd($filePath);
            $image->move(public_path($folder), $name. '.' . $image->getClientOriginalExtension());
            //dd($filePath);
            $product->image_path = $filePath;
            //dd($product->image_path);
        }

        $product->save();

        return redirect(route('admin.products.list'))->with('success','Продукт ' . $product->title . ' добавлен' . '!');

    }   
    public  function adminProductsDelete($id){

        $product =  Product::find($id);

        $product->delete();

        return redirect()->back()->with('success','Успешно удлен');

    }

    public  function adminCategoriesList(){

        $categories = Categor::paginate(10);

        return view('admin.categories.list', [ 
        'categories' => $categories]);

    } 

    public  function adminCategoriesCreate(){

        return view('admin.categories.edit');

    }   

    public  function adminCategoriesEdit($id){

        $category =  Categor::find($id);

        return view('admin.categories.edit', [ 
        'category' => $category]);

    }   

    public  function adminCategoriesSave($id=null, Request $request){
        
        if($id){

            $category =  Categor::find($id);

        } else {

            $category= new Categor();

            $category->publish = false;

        }

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'slug' => 'required',
        ]);

        $category->fill($request->only('name', 'description', 'publish', 'slug', 'parent_id'));

        $category->save();

        return redirect(route('admin.categories.list'))->with('success','Категория ' . $category->title . ' добавлена' . '!');

    }   
    public  function adminCategoriesDelete($id){

        $category =  Categor::find($id);

        $category->delete();

        return redirect()->back()->with('success','Успешно удлен');

    }

    public  function adminArticlesList(){

        $articles = Article::paginate(10);

        return view('admin.articles.list', [ 
        'articles' => $articles]);

    }   

    public  function adminArticlesCreate(){

        return view('admin.articles.edit');

    }   

    public  function adminArticlesEdit($id){

        $article =  Article::find($id);

        return view('admin.articles.edit', [ 
        'article' => $article]);

    }   

    public  function adminArticlesSave($id=null, Request $request){

        if($id){

            $article =  Article::find($id);

        } else {

            $article= new Article();
        }

        $request->validate([

            'title' => 'required|max:255',
            'slug' => 'required',
            'description' => 'required',

        ]);

        $article->fill($request->only('title', 'slug', 'description'));

        $article->save();

        return redirect(route('admin.articles.list'))->with('success','Статья ' . $article->title . ' добавлена' . '!');

    }   

    public  function adminArticlesDelete($id){

        $article =  Article::find($id);

        $article->delete();

        return redirect()->back()->with('success','Успешно удлен');

    }

    public  function adminOrdersList(){

        $orders = Order::paginate(10);

        return view('admin.orders.list', [ 
        'orders' => $orders]);

    } 

    public  function adminOrdersCreate(){

        return view('admin.orders.edit');

    }   

    public  function adminOrdersEdit($id){

        $order =  Order::find($id);

        return view('admin.orders.edit', [ 
        'order' => $order]);

    }   

    public  function adminOrdersSave($id=null, Request $request){
        
        if($id){

            $order =  Order::find($id);

        } else {

        $order= new Order();

        }

        $request->validate([

            'user_id' => 'required|max:11',
            'phone' => 'required',

        ]);

        $order->fill($request->only('user_id', 'phone'));

        $order->save();

        return redirect(route('admin.orders.list'))->with('success','Заказ ' . $order->user_id. ' добавлена' . '!');

    }   

    public  function adminOrdersDelete($id){

        $order =  Order::find($id);

        $order->delete();

        return redirect()->back()->with('success','Успешно удлен');
        
    }

}
