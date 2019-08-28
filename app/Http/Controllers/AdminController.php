<?php

namespace App\Http\Controllers;
use App\Models\Categor;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function adminEdit() {
    	$user =  \Auth::user();
    return view('admin.edit', [ 
    	'user' => $user]);
    }	

    public  function adminSave(Request $request) {
    	//dd($request->all());
        $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
    	$user = \Auth::user();

    	$user->fill($request->only('name', 'email', 'password'));
        $user->password = \Hash::make($request->password);
    	$user->save();
    return redirect()->back();
    }	


}
