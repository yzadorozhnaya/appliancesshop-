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
        return redirect(route('admin.list'))->with('success','Пользователь ' . $user->name . ' добавлен' . '!');
    }	
public  function adminDelete($id) 
    {
        $user =  User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Успешно удлен');
    }   

}
