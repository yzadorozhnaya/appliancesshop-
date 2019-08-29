<?php

namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function adminList() 
    {
        $users = User::paginate(10);
        return view('admin.list', [ 
        'users' => $users]);
    }   
  public  function adminCreate() 
    {
        return view('admin.edit');
    }   

    public  function adminEdit($id) 
    {
    	$user =  User::find($id);
        return view('admin.edit', [ 
    	'user' => $user]);
    }	

    public  function adminSave($id=null, Request $request) 
    {
    	//dd($request->all());
        $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
        if($id){
            $user =  User::find($id);
        }
    	$user= new User();
    	$user->fill($request->only('name', 'email', 'password'));
        $user->password = \Hash::make($request->password);
    	$user->save();
        return redirect(route('admin.list'))->with('success','Пользователь ' . $user->name . ' добавлен' . '!');
    }	
public  function adminDelete($id) 
    {
        $user =  User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Успешно удлен');
    }   

}
