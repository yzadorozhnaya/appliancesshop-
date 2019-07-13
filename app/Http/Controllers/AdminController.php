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
    	$user = User::find(5);
    return view('admin.edit', [ 
    	'user' => $user]);
    }	

    public  function adminSave(Request $request) {
    	dd($request->all());
    	$user = User::find(5);
    	$user->fill($request->only('name', 'email', 'password'));
    	$user->save();
    return redirect()->back();
    }	


}
