<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //admin.users

    public  function adminUsersList() 
    {
        $users = User::paginate(10);
        return view('admin.users.list', [ 
        'users' => $users]);
    }   
    public  function adminUsersCreate() 
    {
        return view('admin.users.edit');
    }   

    public  function adminUsersEdit($id) 
    {
    	$user =  User::find($id);
        return view('admin.users.edit', [ 
    	'user' => $user]);
    }	

    public  function adminUsersSave($id=null, Request $request) 
    {
        //dd($request->all());
        if($id){
            $user =  User::find($id);
        }else{
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

    //admin.products

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

    public  function adminProductsSave($id=null, Request $request) 
    {
        //dd($request->all());
        if($id){
            $product =  Product::find($id);
        }else{
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
        $product->fill($request->only('name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is_publish'));
        $product->save();
        return redirect(route('admin.products.list'))->with('success','Продукт ' . $product->title . ' добавлен' . '!');
    }   
    public  function adminProductsDelete($id) 
    {
        $product =  Product::find($id);
        $product->delete();
        return redirect()->back()->with('success','Успешно удлен');
    }

    //admin.categories


    public  function adminCategoriesList() 
    {
        $categories = Categor::paginate(10);
        return view('admin.categories.list', [ 
        'categories' => $categories]);
    }   
    public  function adminCategoriesCreate() 
    {
        return view('admin.categories.edit');
    }   

    public  function adminCategoriesEdit($id) 
    {
        $category =  Categor::find($id);
        return view('admin.categories.edit', [ 
        'category' => $category]);
    }   

    public  function adminCategoriesSave($id=null, Request $request) 
    {
        //dd($request->all());
        if($id){
            $category =  Categor::find($id);
        }else{
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
    public  function adminCategoriesDelete($id) 
    {
        $category =  Categor::find($id);
        $category->delete();
        return redirect()->back()->with('success','Успешно удлен');
    }



}
